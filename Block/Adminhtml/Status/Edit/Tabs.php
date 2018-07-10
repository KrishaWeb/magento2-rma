<?php

namespace Krishaweb\Rma\Block\Adminhtml\Status\Edit;
 
use Magento\Backend\Block\Widget\Tabs as WidgetTabs;
 
class Tabs extends WidgetTabs{
	protected function _construct(){
		parent::_construct();
		$this->setId('items_edit_tabs');
		$this->setDestElementId('edit_form');
		$this->setTitle(__('Item'));
	}
	protected function _beforeToHtml(){
		$this->addTab(
			'general_data',
			[
				'label' => __('General'),
				'title' => __('General'),
				'content' => $this->getLayout()->createBlock(
					'Krishaweb\Rma\Block\Adminhtml\Status\Edit\Tab\General'
				)->toHtml(),
				'active' => true
			]
		);
		return parent::_beforeToHtml();
	}
}