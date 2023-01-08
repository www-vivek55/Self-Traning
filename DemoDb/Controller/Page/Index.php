<?php
namespace Custom\DemoDb\Controller\Page;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\ResponseInterface;
use Custom\DemoDb\Model\DemoFactory;

class Index extends Action
{
    protected $demoFactory;
    public function __construct(Context $context, DemoFactory $demoFactory)
    {
        $this->demoFactory = $demoFactory;
        parent::__construct($context);
    }

    public function execute()
    {
        $demo = $this->demoFactory->create();
        /*For start All Data */
            /*$data = $demo->load(3);
            echo "<pre/>"; print_r($data->getData());*/
        /*For start End Data */
        /*For start Update */
            /*$data = $demo->load(2);
            $data->setAddress('madarpur'); // It's using for update
            $data->save();*/
        /*For end Update */

        /*For start Add */
            /*$demo->addData(['name'=>'ravi','address'=>'new addres here','status'=>true,'phone_number'=>'123456789']);
            $demo->save();
            echo "<pre/>"; print_r($demo->getId());*/
        /*For end Add */
        /*For start Delete */
            /*$data = $demo->load(2);
            $data->delete();*/
        /*For end Delete */

        /*For Start Collection */
            $collection = $demo->getCollection()
                ->addFieldToSelect(['name','status'])
                //->addFieldToFilter('name',array('eq'=>'vivek'));
                ->addFieldToFilter('status',array('neq'=>true));

            echo "<pre/>"; print_r($collection->getData());
        /*For end Collection */
    }
}
