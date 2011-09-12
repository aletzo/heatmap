<?php

/**
 * site actions.
 *
 * @package    heatmap
 * @subpackage site
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class siteActions extends sfActions
{

    public function executeClick(sfWebRequest $request)
    {
        $this->setLayout(false);
        
        $click = new Click();
        $click->site_id = 1;
        $click->referer = $request->getReferer();
        $click->uri = $request->getUri();
        $click->x = $request->getParameter('x');
        $click->y = $request->getParameter('y');
        $click->avail_height = $request->getParameter('ah');
        $click->avail_width = $request->getParameter('aw');
        $click->inner_height = $request->getParameter('ih');
        $click->inner_width = $request->getParameter('iw');
        $click->height = $request->getParameter('h');
        $click->width = $request->getParameter('w');
        $click->save();
        
        return sfView::NONE;
    }

}
