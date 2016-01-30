<?php
/**
 * Processor file for regpay extra
 *
 * Copyright 2015 by  <>
 * Created on 12-27-2015
 *
 * regpay is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * regpay is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * regpay; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @package regpay
 * @subpackage processors
 */

/* @var $modx modX */

// comment out the next line to make processor functional
class SnippetChangeCategoryProcessor extends modProcessor {
    public $classKey = 'modSnippet';
    public $languageTopics = array('regpay:default');
    
    public function process() {

/* !!! Remove this line to make processor functional */
return $this->modx->error->success();

        if (!$this->modx->hasPermission('save_snippet')) {
            return $this->modx->error->failure($this->modx->lexicon('access_denied'));
        }

        if (empty($scriptProperties['snippets'])) {
            return $this->failure($this->modx->lexicon('regpay.snippets_err_ns'));
        }
        /* get parent */
        if (!empty($scriptProperties['category'])) {
            $category = $this->modx->getObject('modCategory',$scriptProperties['category']);
            if (empty($category)) {
                return $this->failure($this->modx->lexicon('snippet.category_err_nf'));
            }
        }

        /* iterate over snippets */
        /** @var $snippet modElement */
        $snippetIds = explode(',',$scriptProperties['snippets']);
        foreach ($snippetIds as $snippetId) {
            $snippet = $this->modx->getObject($this->classKey,$snippetId);
            if ($snippet == null) continue;
        
            $snippet->set('category',$scriptProperties['category']);
            $snippet->save(3600);
        }
        return $this->success();
    }



}

return 'SnippetChangeCategoryProcessor';