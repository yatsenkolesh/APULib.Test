<?php
class Controller_Tracks extends Controller_Common
{
	public function action_index()
	{
		$query = $this->request->query('q');
		
		if($query)
		{
			$tracks = new Tracks8();
			$type =  $tracks->validSmartId($this->request->query('type'));
			$results = $tracks->search($query, $type);
		}
		
		$this->showTemplate('Tracks', array(
			'isPageDefaultTemplate' => 1,
			'query' => $query,
			'results' => isset($results) ? $results : FALSE,
			'type' => isset($type) ? $type : NULL
		));
	}
	
	public function action_next()
	{
		$id = $this->request->param('id');
		$token = $this->request->query('token');
				
		$tracks = new Tracks8();
		$play = $tracks->play($id, 1, $token);
				
		if(!isset($play->set->track->url))
			return 0;
		
		echo json_encode(array(
			'stream' => $play->set->track->url,
			'is_skip' => $play->set->skip_allowed,
			'name' => $play->set->track->performer .' - '. $play->set->track->name
		));
		
		exit;
	}
	
	public function action_show()
	{
		$id = $this->request->param('id');
		
		$tracks = new Tracks8();
		$track = $tracks->getTrack($id);
		
		if(!$track)
		{
			echo(__('Нету трека ! Как и идей для дизайна страницы 404 ! Всё по веб-брутализму.'));
			return ;
		}
		
		$play =  $tracks->play($id);
		
		$comments = new Model_Comments($id, 'playlist');
		
		if($this->request->post('comment'))
		{
			if($comments->add($this->request->post('comment')))
			{
				HTTP::redirect(URL::site(Request::detect_uri(), TRUE) . URL::query().'?isCommentAdd=1');
			}
		}
		
		if($this->request->query('isCommentAdd'))
		{
			$this->addMessage('Комментарий был успешно добавлен');
		}
		
		$this->showTemplate('Tracks/SingleTrack', array(
			'isPageDefaultTemplate' => 1,
			'track' => $track,
			'isTemplateMessagesDisplay' => TRUE,
			'play' => $play,
			'token' => $tracks->token,
			'comments' => $comments->getComments(),
			'messages' => $this->getMessages()
		));
	}
	
	public function action_add_to_bookmarks()
	{
		$id = $this->request->param('id');
		
		if(Model_Bookmarks::instance()->add($id))
		{
			echo ('1');
			return ;
		}
		echo ('0');
		return ;
	}
	
	public function action_load_more()
	{
		//copy past - sorry :(
		$page = $this->request->query('page');
		$query = $this->request->query('q');
		
		$tracks = new Tracks8();
		$results = $tracks->search($query, $this->request->query('type'), $page);
		
		if(!isset($results->mixes))
			return;
		
		$html = null;
		
		foreach($results->mixes as $track)
		{
			$html .= View::factory('Tracks/TrackBlock', compact('track'));
		}
		
		if(!isset($results->next_page))
			$html .= 'NEXT_PAGE_NO_EXISTS';
		
		$this->response->body($html);
		
		return ;
	}
}
?>