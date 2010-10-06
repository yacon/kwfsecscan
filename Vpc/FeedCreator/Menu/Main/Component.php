<?php
class Vpc_FeedCreator_Menu_Main_Component extends Vpc_Menu_Component
{
    public static function getSettings()
    {
        $ret = parent::getSettings();
        $ret['level'] = 'main';
        $ret['maxLevel'] = 1;
        $ret['cssClass'] .= ' webListNone';
        $ret['liCssClasses'] = array(
            'home' => trl('Home'),
            'myFeeds' => trl('My Feeds'),
            'helpSupport' => trl('Help & Support'),
            'blog' => trl('Blog'),
            'myAccount' => trl('My Account')
        );
        $ret['showAsEditComponent'] = true;

        $ret['generators']['subMenu'] = array(
            'class' => 'Vpc_Menu_Generator',
            'component' => 'Vpc_FeedCreator_Menu_Sub_Component'
        );

        return $ret;
    }
}
