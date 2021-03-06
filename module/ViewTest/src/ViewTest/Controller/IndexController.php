<?php
namespace ViewTest\Controller;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\JsonModel;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
	protected $value = array('A' => 'Alpha', 'B' => 'Beta', 'D' => 'Delta');
	
	public function indexAction()
	{
		$viewModel = new ViewModel(array('value' => $this->value));
//		$viewModel->setTerminal(TRUE);
		return $viewModel;
	}
	public function jsonAction()
	{
		return new JsonModel(array('value' => $this->value));
	}
}