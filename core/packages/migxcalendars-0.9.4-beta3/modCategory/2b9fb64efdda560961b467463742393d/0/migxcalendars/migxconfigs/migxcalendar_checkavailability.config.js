{
  "id":164,
  "name":"migxcalendar_checkavailability",
  "formtabs":[
    {
      "MIGX_id":1,
      "caption":"[[%migxcal.event]]",
      "print_before_tabs":"0",
      "fields":[
        {
          "MIGX_id":1,
          "field":"availability",
          "caption":"[[%migxcal.availability]]",
          "description":"",
          "description_is_code":"0",
          "inputTV":"",
          "inputTVtype":"migxdb",
          "validation":"",
          "configs":"migxcalendar_availability",
          "display":"",
          "sourceFrom":"config",
          "sources":"[]",
          "inputOptionValues":"",
          "default":""
        }
      ]
    }
  ],
  "contextmenus":"remove",
  "actionbuttons":"addItem",
  "columnbuttons":"update",
  "filters":"[]",
  "extended":{
    "migx_add":"Add Date",
    "formcaption":"",
    "update_win_title":"",
    "win_id":"migxcalendar_checkavailability",
    "maxRecords":"",
    "addNewItemAt":"bottom",
    "multiple_formtabs":"",
    "winbuttonslist":"cancel",
    "extrahandlers":"this.publishObject||this.unpublishObject",
    "packageName":"migxcalendars",
    "classname":"migxCalendarDates",
    "task":"",
    "getlistsort":"startdate",
    "getlistsortdir":"",
    "use_custom_prefix":"0",
    "prefix":"",
    "grid":"",
    "gridload_mode":2,
    "check_resid":1,
    "check_resid_TV":"",
    "join_alias":"Event",
    "has_jointable":"no",
    "getlistwhere":{
      "type":"single"
    },
    "joins":"",
    "cmpmaincaption":"Events Manager",
    "cmptabcaption":"Events",
    "cmptabdescription":"Manage Events",
    "cmptabcontroller":"",
    "winbuttons":"",
    "onsubmitsuccess":"",
    "submitparams":""
  },
  "columns":[
    {
      "MIGX_id":1,
      "header":"ID",
      "dataIndex":"id",
      "width":10,
      "sortable":true,
      "show_in_grid":"0",
      "renderer":"",
      "clickaction":"",
      "selectorconfig":"",
      "renderchunktpl":"",
      "renderoptions":"[]"
    },
    {
      "MIGX_id":7,
      "header":"[[%migxcal.title]]",
      "dataIndex":"title",
      "width":30,
      "sortable":"false",
      "show_in_grid":1,
      "renderer":"this.renderRowActions",
      "clickaction":"",
      "selectorconfig":"",
      "renderchunktpl":"",
      "renderoptions":"[]"
    },
    {
      "MIGX_id":3,
      "header":"[[%migxcal.start]]",
      "dataIndex":"startdate",
      "width":20,
      "sortable":true,
      "show_in_grid":1,
      "renderer":"this.renderDate",
      "clickaction":"",
      "selectorconfig":"",
      "renderchunktpl":"",
      "renderoptions":"[]"
    },
    {
      "MIGX_id":5,
      "header":"[[%migxcal.end]]",
      "dataIndex":"enddate",
      "width":20,
      "sortable":true,
      "show_in_grid":1,
      "renderer":"this.renderDate",
      "clickaction":"",
      "selectorconfig":"",
      "renderchunktpl":"",
      "renderoptions":"[]"
    },
    {
      "MIGX_id":6,
      "header":"[[%migxcal.active]]",
      "dataIndex":"published",
      "width":10,
      "sortable":"false",
      "show_in_grid":1,
      "renderer":"this.renderClickCrossTick",
      "clickaction":"",
      "selectorconfig":"",
      "renderchunktpl":"",
      "renderoptions":"[]"
    }
  ],
  "createdby":1,
  "createdon":"2014-03-02 20:03:17",
  "editedby":1,
  "editedon":"2014-03-03 06:06:14",
  "deleted":0,
  "deletedon":"-1-11-30 00:00:00",
  "deletedby":0,
  "published":1,
  "publishedon":"2014-03-02 01:00:00",
  "publishedby":0
}