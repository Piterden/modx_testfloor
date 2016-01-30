<?php

$packageNameLower = 'regpay'; /* No spaces, no dashes */

$components = array(
    /* These are used to define the package and set values for placeholders */
    'packageName' => 'regpay',  /* No spaces, no dashes */
    'packageNameLower' => $packageNameLower,
    'packageDescription' => 'regpay project for MyComponent extra',
    'version' => '1.0.0',
    'release' => 'beta1',
    'author' => '',
    'email' => '<>',
    'authorUrl' => '',
    'authorSiteName' => "",
    'packageDocumentationUrl' => '',
    'copyright' => '2015',

    /* no need to edit this except to change format */
    'createdon' => strftime('%m-%d-%Y'),

    'gitHubUsername' => 'Piterden',
    'gitHubRepository' => 'regpay',

    /* two-letter code of your primary language */
    'primaryLanguage' => 'ru',

    /* Set directory and file permissions for project directories */
    'dirPermission' => 0755,  /* No quotes!! */
    'filePermission' => 0644, /* No quotes!! */

    /* Define source and target directories */

    /* path to MyComponent source files */
    'mycomponentRoot' => $this->modx->getOption('mc.root', null,
        MODX_CORE_PATH . 'components/mycomponent/'),

    /* path to new project root */
    'targetRoot' => MODX_ASSETS_PATH . 'mycomponents/' . $packageNameLower . '/',


    /* *********************** NEW SYSTEM SETTINGS ************************ */

    /* If your extra needs new System Settings, set their field values here.
     * You can also create or edit them in the Manager (System -> System Settings),
     * and export them with exportObjects. If you do that, be sure to set
     * their namespace to the lowercase package name of your extra */

    'newSystemSettings' => array(
        //'regpay_system_setting1' => array( // key
        //    'key' => 'regpay_system_setting1',
        //    'name' => 'regpay Setting One',
        //    'description' => 'Description for setting one',
        //    'namespace' => 'regpay',
        //    'xtype' => 'textfield',
        //    'value' => 'value1',
        //    'area' => 'area1',
        //),
        //'regpay_system_setting2' => array( // key
        //    'key' => 'regpay_system_setting2',
        //    'name' => 'regpay Setting Two',
        //    'description' => 'Description for setting two',
        //    'namespace' => 'regpay',
        //    'xtype' => 'combo-boolean',
        //    'value' => true,
        //    'area' => 'area2',
        //),
    ),

    /* ************************ NEW SYSTEM EVENTS ************************* */

    /* Array of your new System Events (not default
     * MODX System Events). Listed here so they can be created during
     * install and removed during uninstall.
     *
     * Warning: Do *not* list regular MODX System Events here !!! */

    'newSystemEvents' => array(
    //    'OnMyEvent1' => array(
    //        'name' => 'OnMyEvent1',
    //    ),
    //    'OnMyEvent2' => array(
    //        'name' => 'OnMyEvent2',
    //        'groupname' => 'regpay',
    //        'service' => 1,
    //    ),
    ),

    /* ************************ NAMESPACE(S) ************************* */
    /* (optional) Typically, there's only one namespace which is set
     * to the $packageNameLower value. Paths should end in a slash
    */

    'namespaces' => array(
        'regpay' => array(
            'name' => 'regpay',
            'path' => '{core_path}components/regpay/',
            'assets_path' => '{assets_path}components/regpay/',
        ),
    ),

    /* ************************ CONTEXT(S) ************************* */
    /* (optional) List any contexts other than the 'web' context here
    */

    'contexts' => array(
    //    'regpay' => array(
    //        'key' => 'regpay',
    //        'description' => 'regpay context',
    //        'rank' => 2,
    //    )
    ),

    /* *********************** CONTEXT SETTINGS ************************ */

    /* If your extra needs Context Settings, set their field values here.
     * You can also create or edit them in the Manager (Edit Context -> Context Settings),
     * and export them with exportObjects. If you do that, be sure to set
     * their namespace to the lowercase package name of your extra.
     * The context_key should be the name of an actual context.
     * */

    'contextSettings' => array(
    //    'regpay_context_setting1' => array(
    //        'context_key' => 'regpay',
    //        'key' => 'regpay_context_setting1',
    //        'name' => 'regpay Setting One',
    //        'description' => 'Description for setting one',
    //        'namespace' => 'regpay',
    //        'xtype' => 'textfield',
    //        'value' => 'value1',
    //        'area' => 'regpay',
    //    ),
    //    'regpay_context_setting2' => array(
    //        'context_key' => 'regpay',
    //        'key' => 'regpay_context_setting2',
    //        'name' => 'regpay Setting Two',
    //        'description' => 'Description for setting two',
    //        'namespace' => 'regpay',
    //        'xtype' => 'combo-boolean',
    //        'value' => true,
    //        'area' => 'regpay',
    //    ),
    ),

    /* ************************* CATEGORIES *************************** */
    /* (optional) List of categories. This is only necessary if you
     * need to categories other than the one named for packageName
     * or want to nest categories.
    */

    'categories' => array(
        'regpay' => array(
            'category' => 'RegPay',
            'parent' => '',  /* top level category */
        ),
    //    'category2' => array(
    //        'category' => 'Category2',
    //        'parent' => 'regpay', /* nested under regpay */
    //    )
    ),

    /* *************************** MENUS ****************************** */

    /* If your extra needs Menus, you can create them here
     * or create them in the Manager, and export them with exportObjects.
     * Be sure to set their namespace to the lowercase package name
     * of your extra.
     *
     * Every menu should have exactly one action */

    'menus' => array(
        'regpay' => array(
            'text' => 'regpay',
            'parent' => 'components',
            'description' => 'ex_menu_desc',
            'icon' => '',
            'menuindex' => 0,
            'params' => '',
            'handler' => '',
            'permissions' => '',

            'action' => array(
                'id' => '',
                'namespace' => 'regpay',
                'controller' => 'index',
                'haslayout' => true,
                'lang_topics' => 'regpay:default',
                'assets' => '',
            ),
        ),
    ),


    /* ************************* ELEMENTS **************************** */

    /* Array containing elements for your extra. 'category' is required
       for each element, all other fields are optional.
       Property Sets (if any) must come first!

       The standard file names are in this form:
           SnippetName.snippet.php
           PluginName.plugin.php
           ChunkName.chunk.html
           TemplateName.template.html

       If your file names are not standard, add this field:
          'filename' => 'actualFileName',
    */


    'elements' => array(

        'propertySets' => array( /* all three fields are required */
        //    'PropertySet1' => array(
        //        'name' => 'PropertySet1',
        //        'description' => 'Description for PropertySet1',
        //        'category' => 'regpay',
        //    ),
        //    'PropertySet2' => array(
        //        'name' => 'PropertySet2',
        //        'description' => 'Description for PropertySet2',
        //        'category' => 'regpay',
        //    ),
        ),
        'snippets' => array(
        //    'Snippet1' => array(
        //        'category' => 'regpay',
        //        'description' => 'Description for Snippet one',
        //        'static' => true,
        //    ),
        //
        //    'Snippet2' => array( /* regpay with static and property set(s)  */
        //        'category' => 'Category2',
        //        'description' => 'Description for Snippet two',
        //        'static' => false,
        //        'propertySets' => array(
        //            'PropertySet1',
        //            'PropertySet2'
        //        ),
        //    ),
        ),
        'plugins' => array(
        //    'Plugin1' => array( /* minimal regpay */
        //        'category' => 'regpay',
        //    ),
        //    'Plugin2' => array( /* regpay with static, events, and property sets */
        //        'category' => 'regpay',
        //        'description' => 'Description for Plugin one',
        //        'static' => false,
        //        'propertySets' => array( /* all property sets to be connected to element */
        //            'PropertySet1',
        //        ),
        //        'events' => array(
        //            /* minimal regpay - no fields */
        //            'OnUserFormSave' => array(),
        //            /* regpay with fields set */
        //            'OnMyEvent1' => array(
        //                'priority' => '0', /* priority of the event -- 0 is highest priority */
        //                'group' => 'plugins', /* should generally be set to 'plugins' */
        //                'propertySet' => 'PropertySet1', /* property set to be used in this pluginEvent */
        //            ),
        //            'OnMyEvent2' => array(
        //                'priority' => '3',
        //                'group' => 'plugins',
        //                'propertySet' => '',
        //            ),
        //            'OnDocFormSave' => array(
        //                'priority' => '4',
        //                'group' => 'plugins',
        //                'propertySet' => '',
        //            ),
        //        ),
        //    ),
        ),
        'chunks' => array(
        //    'Chunk1' => array(
        //        'category' => 'regpay',
        //    ),
        //    'Chunk2' => array(
        //        'description' => 'Description for Chunk two',
        //        'category' => 'regpay',
        //        'static' => false,
        //        'propertySets' => array(
        //            'PropertySet2',
        //        ),
        //    ),
        ),
        'templates' => array(
        //    'Template1' => array(
        //        'category' => 'regpay',
        //    ),
        //    'Template2' => array(
        //        'category' => 'regpay',
        //        'description' => 'Description for Template two',
        //        'static' => false,
        //        'propertySets' => array(
        //            'PropertySet2',
        //        ),
        //    ),
        ),
        'templateVars' => array(
        //    'Tv1' => array(
        //        'category' => 'regpay',
        //        'description' => 'Description for TV one',
        //        'caption' => 'TV One',
        //        'default_text' => 'Tv1 Default Text',
        //        'propertySets' => array(
        //            'PropertySet1',
        //            'PropertySet2',
        //        ),
        //        'templates' => array(
        //            'default' => 1,
        //            'Template1' => 4,
        //            'Template2' => 4,
//
//
        //        ),
        //    ),
        //    'Tv2' => array( /* regpay with templates, default, and static specified */
        //        'category' => 'regpay',
        //        'description' => 'Description for TV two',
        //        'caption' => 'TV Two',
        //        'static' => false,
        //        'default_text' => '@INHERIT',
        //        'templates' => array(
        //            'default' => 3, /* second value is rank -- for ordering TVs when editing resource */
        //            'Template1' => 4,
        //            'Template2' => 1,
        //        ),
        //    ),
        ),
    ),
    /* (optional) will make all element objects static - 'static' field above will be ignored */
    'allStatic' => false,


    /* ************************* RESOURCES ****************************
     Important: This list only affects Bootstrap. There is another
     list of resources below that controls ExportObjects.
     * ************************************************************** */
    /* Array of Resource pagetitles for your Extra; All other fields optional.
       You can set any resource field here */
    'resources' => array(
    //    'Resource1' => array( /* minimal regpay */
    //        'pagetitle' => 'Resource1',
    //        'alias' => 'resource1',
    //        'context_key' => 'regpay',
    //    ),
    //    'Resource2' => array( /* regpay with other fields */
    //        'pagetitle' => 'Resource2',
    //        'alias' => 'resource2',
    //        'context_key' => 'regpay',
    //        'parent' => 'Resource1',
    //        'template' => 'Template2',
    //        'richtext' => false,
    //        'published' => true,
    //        'tvValues' => array(
    //            'Tv1' => 'SomeValue',
    //            'Tv2' => 'SomeOtherValue',
    //        ),
    //    ),
    ),


    /* Array of languages for which you will have language files,
     *  and comma-separated list of topics
     *  ('.inc.php' will be added as a suffix). */
    'languages' => array(
        'en' => array(
            'default',
            'properties',
        ),
        'ru' => array(
            'default',
            'properties',
        ),
    ),
    /* ********************************************* */
    /* Define optional directories to create under assets.
     * Add your own as needed.
     * Set to true to create directory.
     * Set to hasAssets = false to skip.
     * Empty js and/or css files will be created.
     */
    'hasAssets' => false,

    'assetsDirs' => array(
        /* If true, a default (empty) CSS file will be created */
        'css' => true,

        /* If true, a default (empty) JS file will be created */
        'js' => true,

        //'images' => true,
        //'audio' => true,
        //'video' => true,
        //'themes' => true,
    ),
    /* minify any JS files */
    'minifyJS' => false,
    /* Create a single JS file from all JS files */
    'createJSMinAll' => false,
    /* if this is false, regular jsmin will be used.
       JSMinPlus is slower but more reliable */
    'useJSMinPlus' => false,

    /* These will automatically go under assets/components/yourcomponent/js/
       Format: directory:filename
       (no trailing slash on directory)
       if 'createCmpFiles is true, these will be ignored.
    */
    'jsFiles' => array(
        'regpay.js',
    ),

    /* Desired CSS files */
    'cssFiles' => array(
        'regpay.css',
    ),

    /* ********************************************* */
    /* Define basic directories and files to be created in project*/

    'docs' => array(
        'readme.txt',
        'license.txt',
        'changelog.txt',
    ),

    /* (optional) Description file for GitHub project home page */
    'readme.md' => true,
    /* assume every package has a core directory */
    'hasCore' => true,

    /* ********************************************* */
    /* (optional) Array of extra script resolver(s) to be run
     * during install. Note that resolvers to connect plugins to events,
     * property sets to elements, resources to templates, and TVs to
     * templates will be created automatically -- *don't* list those here!
     *
     * 'default' creates a default resolver named after the package.
     * (other resolvers may be created above for TVs and plugins).
     * Suffix 'resolver.php' will be added automatically */
    'resolvers' => array(
        'default',
    //    'addUsers'
    ),

    /* (optional) Validators can abort the install after checking
     * conditions. Array of validator names (no
     * prefix of suffix) or '' 'default' creates a default resolver
     *  named after the package suffix 'validator.php' will be added */

    'validators' => array(
        'default',
    //    'hasGdLib'
    ),

    /* (optional) install.options is needed if you will interact
     * with user during the install.
     * See the user.input.php file for more information.
     * Set this to 'install.options' or ''
     * The file will be created as _build/install.options/user.input.php
     * Don't change the filename or directory name. */
    'install.options' => 'install.options',


    /* Suffixes to use for resource and element code files (not implemented)  */
    'suffixes' => array(
        'modPlugin' => '.php',
        'modSnippet' => '.php',
        'modChunk' => '.html',
        'modTemplate' => '.html',
        'modResource' => '.html',
    ),


    /* ********************************************* */
    /* (optional) Only necessary if you will have class files.
     *
     * Array of class files to be created.
     *
     * Format is:
     *
     * 'ClassName' => 'directory:filename',
     *
     * or
     *
     *  'ClassName' => 'filename',
     *
     * ('.class.php' will be appended automatically)
     *
     *  Class file will be created as:
     * yourcomponent/core/components/yourcomponent/model/[directory/]{filename}.class.php
     * Note: If a CMP is being created, classes containing the
     * project name will be ignored here.
     *
     * Set to array() if there are no classes. */
    'classes' => array(
        //'AnotherClass' => 'regpay:anotherclass',

        /* (optional) - Specify methods for each class.
           if 'function' is missing, 'public function ' will
           be prepended. Curly braces will be added   */
        //'methods' => array(
        //    /* Add one array here for each class with methods */
        //    'AnotherClass' => array(
        //        'public function method1()',
        //        'method2($arg1, $arg2 = false)',
        //    ),
        //),
    ),

    /* ************************************
     *  These values are for CMPs.
     *  Set any of these to an empty array if you don't need them.
     *  **********************************/

    /* If this is false, the rest of this section will be ignored */

    'createCmpFiles' => true,

    /* IMPORTANT: The array values in the rest of
       this section should be all lowercase */

    /* This is the main action file for your component.
       It will automatically go in core/component/yourcomponent/
    */

    'actionFile' => 'index.class.php',

    /* CSS file for CMP */

    'cssFile' => 'mgr.css',

    /* These will automatically go to core/components/yourcomponent/processors/
       format directory:filename
       '.class.php' will be appended to the filename

       Built-in processor classes include getlist, create, update, duplicate,
       import, and export. */

    'processors' => array(
        'mgr/snippet:getlist',
        'mgr/snippet:changecategory',
        'mgr/snippet:remove',

        'mgr/usergroup:getlist',
        'mgr/usergroup:remove',
        
        'mgr/chunk:getlist',
        'mgr/chunk:changecategory',
        'mgr/chunk:remove',
    ),

    /* These will automatically go to core/components/yourcomponent/controllers[/directory]/filename
       Format: directory:filename */

    'controllers' => array(
        ':home.class.php',
    ),

    /* These will automatically go in assets/components/yourcomponent/ */

    'connectors' => array(
        'connector.php'

    ),
    /* These will automatically go to assets/components/yourcomponent/js[/directory]/filename
       Format: directory:filename */

    'cmpJsFiles' => array(
        ':regpay.class.js',
        'sections:home.js',
        'widgets:home.panel.js',
        'widgets:snippet.grid.js',
        'widgets:chunk.grid.js',
        'widgets:usergroup.grid.js',
    ),

    /* These go to core/components/componentName/templates/
     * The format is:
     *    filename:content
     * content is optional
     */

    'cmpTemplates' => array (
         'mgr:<div id="regpay-panel-home-div"></div>',
    ),


    /* *******************************************
     * These settings control exportObjects.php  *
     ******************************************* */
    /* ExportObjects will update existing files. If you set dryRun
       to '1', ExportObjects will report what it would have done
       without changing anything. Note: On some platforms,
       dryRun is *very* slow  */

    'dryRun' => '0',

    /* Array of elements to export. All elements set below will be handled.
     *
     * To export resources, be sure to list pagetitles and/or IDs of parents
     * of desired resources
    */
    'process' => array(
        //'contexts',
        //'snippets',
        //'plugins',
        //'templateVars',
        //'templates',
        //'chunks',
        //'resources',
        //'propertySets',
        //'systemSettings',
        //'contextSettings',
        //'systemEvents',
        'menus'
    ),
    /*  Array  of resources to process. You can specify specific resources
        or parent (container) resources, or both.

        They can be specified by pagetitle or ID, but you must use the same method
        for all settings and specify it here. Important: use IDs if you have
        duplicate pagetitles */
    'getResourcesById' => false,

    //'exportResources' => array(
    //    'Resource1',
    //    'Resource2',
    //),
    /* Array of resource parent IDs to get children of. */
    //'parents' => array(),
    /* Also export the listed parent resources
      (set to false to include just the children) */
    'includeParents' => false,


    /* ******************** LEXICON HELPER SETTINGS ***************** */
    /* These settings are used by LexiconHelper */
    'rewriteCodeFiles' => false,  /* remove ~~descriptions */
    'rewriteLexiconFiles' => true, /* automatically add missing strings to lexicon files */
    /* ******************************************* */

    /* Array of aliases used in code for the properties array.
     * Used by the checkproperties utility to check properties in code against
     * the properties in your properties transport files.
     * if you use something else, add it here (OK to remove ones you never use.
     * Search also checks with '$this->' prefix -- no need to add it here. */
    'scriptPropertiesAliases' => array(
        'props',
        'sp',
        'config',
        'scriptProperties'
    ),
);

return $components;