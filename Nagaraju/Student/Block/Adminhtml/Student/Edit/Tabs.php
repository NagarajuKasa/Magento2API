<?php
namespace Nagaraju\Student\Block\Adminhtml\Student\Edit;

/**
 * Admin page left menu
 */
class Tabs extends \Magento\Backend\Block\Widget\Tabs
{
    /**
     * @return void
     */
    protected function _construct()
    {
        parent::_construct();
        $this->setId('student_tabs');
        $this->setDestElementId('edit_form');
        $this->setTitle(__('Student Information'));
    }
}