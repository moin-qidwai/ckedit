<?php
namespace Craft;

class CkTextPlugin extends BasePlugin
{
    function getName()
    {
         return Craft::t('CKText');
    }

    function getVersion()
    {
        return '1.0';
    }

    function getDeveloper()
    {
        return 'Moin Ahmed Qidwai';
    }

    function getDeveloperUrl()
    {
        return 'http://moin-qidwai.me';
    }
}