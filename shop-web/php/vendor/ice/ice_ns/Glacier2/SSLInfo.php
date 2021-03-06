<?php
// **********************************************************************
//
// Copyright (c) 2003-2013 ZeroC, Inc. All rights reserved.
//
// This copy of Ice is licensed to you under the terms described in the
// ICE_LICENSE file included in this distribution.
//
// **********************************************************************
//
// Ice version 3.5.1
//
// <auto-generated>
//
// Generated from file `SSLInfo.ice'
//
// Warning: do not edit this file.
//
// </auto-generated>
//


namespace
{
    require_once 'Ice/BuiltinSequences.php';
}

namespace Glacier2
{
    if(!class_exists('\\Glacier2\\SSLInfo'))
    {
        class SSLInfo
        {
            public function __construct($remoteHost='', $remotePort=0, $localHost='', $localPort=0, $cipher='', $certs=null)
            {
                $this->remoteHost = $remoteHost;
                $this->remotePort = $remotePort;
                $this->localHost = $localHost;
                $this->localPort = $localPort;
                $this->cipher = $cipher;
                $this->certs = $certs;
            }

            public function __toString()
            {
                global $Glacier2__t_SSLInfo;
                return IcePHP_stringify($this, $Glacier2__t_SSLInfo);
            }

            public $remoteHost;
            public $remotePort;
            public $localHost;
            public $localPort;
            public $cipher;
            public $certs;
        }

        $Glacier2__t_SSLInfo = IcePHP_defineStruct('::Glacier2::SSLInfo', '\\Glacier2\\SSLInfo', array(
            array('remoteHost', $IcePHP__t_string), 
            array('remotePort', $IcePHP__t_int), 
            array('localHost', $IcePHP__t_string), 
            array('localPort', $IcePHP__t_int), 
            array('cipher', $IcePHP__t_string), 
            array('certs', $Ice__t_StringSeq)));
    }
}
?>
