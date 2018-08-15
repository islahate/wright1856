<?php

class module extends Entities
{

    private $id_module;
    private $module;
    private $list_action = null;

    function __construct($id_module = null, $module = null)
    {
        $this->id_module = $id_module;
        $this->module = $module;
        $this->list_action = array();

        $this->table = "modules";
        $this->primaryKey = "id_module";
        $this->metadata = array(
            'id_module' => 'id_module',
            'module' => 'module'
        );
    }

    public function getIdModule()
    {
        return $this->id_module;
    }

    public function setIdModule($id_module)
    {
        $this->id_module = $id_module;
    }

    public function getModule()
    {
        return $this->module;
    }

    public function setModule($module)
    {
        $this->module = $module;
    }

    public function getListAction()
    {
        return $this->list_action;
    }

    public function setListAction($action)
    {
        array_push($this->list_action, $action);
    }

    public function tableShow()
    {
        $_ul = '<ul class="li_inline"><li><a style="cursor:pointer;" onclick="list_actions(' . $this->id_module . ')">liste actions</li><li><a style="cursor:pointer;" onclick="delete_module(' . $this->id_module . ')">supprimer</a></li></ul>';

        return '<tr id="row_' . $this->id_module . '"><td>' . ucfirst($this->module) . '</td><td>' . $_ul . '</td></tr>';
    }

    public function show()
    {
        $box = '<div><h3 class="title">' . $this->module . '</h3><div class="content">';
        foreach ($this->list_action as $action) {
            $box .= $action->tableShow();
        }
        $box .= '</div></div>';
        return $box;
    }
}