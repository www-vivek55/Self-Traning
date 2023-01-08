<?php
namespace Custom\CustomResponse\Controller\Page;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\Controller\Result\JsonFactory;
use Magento\Framework\Controller\Result\Raw;
use Magento\Framework\Controller\Result\ForwardFactory;
use Magento\Framework\Controller\Result\RedirectFactory;

class HelloWorld extends Action
{
    /**
     * @var PageFactory
     */
    protected $pageFactory;
    /**
     * @var JsonFactory
     */
    protected $jsonFactory;
    /**
     * @var Raw
     */
    protected $raw;

    /**
     * @var ForwardFactory
     */
    protected $forwardFactory;
    /**
     * @var RedirectFactory
     */
    protected $redirectFactory;

    /**
     * HelloWorld constructor.
     * @param Context $context
     * @param PageFactory $pageFactory
     * @param JsonFactory $jsonFactory
     * @param Raw $raw
     * @param ForwardFactory $forwardFactory
     * @param RedirectFactory $redirectFactory
     */
    public function __construct(
        Context $context,
        PageFactory $pageFactory,
        JsonFactory $jsonFactory,
        Raw $raw,
        ForwardFactory $forwardFactory,
        RedirectFactory $redirectFactory
    ){
        $this->pageFactory = $pageFactory;
        $this->jsonFactory = $jsonFactory;
        $this->raw = $raw;
        $this->forwardFactory = $forwardFactory;
        $this->redirectFactory = $redirectFactory;
        parent::__construct($context);
    }

    public function execute()
    {
        //return $this->pageFactory->create();
        //return $this->jsonFactory->create()->setData(['key'=>'value','key2'=>['one','two']]);
        //return $this->raw->setContents('Hello world from custom response module');
        /*$result = $this->forwardFactory->create();
        $result->setModule('noroutefound')->setController('page')->forward('CustomNoRoute');
        return $result;*/
        $result = $this->redirectFactory->create();
        $result->setPath('noroutefound/page/CustomNoRoute');
        return $result;
    }
}
