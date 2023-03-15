<?php 
/*
Copyright 2022 UUP dump authors

Licensed under the Apache License, Version 2.0 (the "License");
you may not use this file except in compliance with the License.
You may obtain a copy of the License at

   http://www.apache.org/licenses/LICENSE-2.0

Unless required by applicable law or agreed to in writing, software
distributed under the License is distributed on an "AS IS" BASIS,
WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
See the License for the specific language governing permissions and
limitations under the License.
*/
if(!isset($templateOk)) die();
?>
<h3 class="ui centered header">
    <div class="content">
        <i class="fitted plus circle icon"></i>&nbsp;
        Add a new build    </div>
</h3>

<div class="ui two columns mobile stackable centered grid">
    <div class="column">
        <h3 class="ui header">
            <i class="list icon"></i>
            Select options        </h3>
        <form class="ui form" action="fetchupd.php" method="get">
            <div class="field">
                <label>体系结构</label>
                <select class="ui dropdown"  name="arch">
                    <option value="amd64">x64 / amd64</option>
                    <option value="x86">x86</option>
                    <option value="arm64">arm64</option>
                </select>
            </div>

            <div class="field">
                <label>推送通道</label>
                <select class="ui dropdown" name="ring">
                    <option value="wif" selected>Dev 渠道</option>
                    <option value="wis">Beta 渠道</option>
                    <option value="rp">发布预览渠道</option>
                    <option value="retail">零售</option>
                </select>
            </div>

            <div class="field">
                <label>内部版本</label>
                <input type="text" value="22621.525" name="build">
            </div>

            <div class="field">
                <label>版本</label>
                <select class="ui dropdown" name="sku">
                    <option value="101">Home</option>
                    <option value="48" selected>Pro</option>
                    <option value="121">Education</option>
                    <option value="4">Enterprise</option>
                    <option value="72">Enterprise Evaluation</option>
                    <option value="125">Enterprise LTSC</option>
                    <option value="129">Enterprise LTSC Evaluation</option>
                    <option value="119">Team</option>
                    <option value="7">Server Standard</option>
                    <option value="8">Server Datacenter</option>
                    <option value="406">Azure Stack HCI</option>
                    <option value="407">Server Datacenter Azure Edition</option>
                </select>
            </div>

            <button class="ui fluid right labeled icon primary button" id="submitForm" type="submit">
                <i class="right arrow icon"></i>
                下一步            </button>
        </form>

        <div class="ui info message">
            <i class="info icon"></i>
            Click the <i>Next</i> button to start searching with the specified options.        </div>
    </div>

    <div class="column">
        <h3 class="ui header">
            <i class="info circle icon"></i>
            Using this page        </h3>
        <p>This page is meant to be used by advanced users, who would like to add a build not found on the website. In case you want to use one of the most commonly used parameters, please use one of the <i>Quick options</i> found on the home page.</p>
        <div class="ui negative icon message">
            <i class="exclamation triangle icon"></i>
            <div class="content">
                <div class="header">
                    Options notice                </div>
                <p>Options found here configure how the underlying Windows Update client reports itself to the Microsoft servers. It is crucial to set these properly, otherwise you will receive an error.</p>
            </div>
        </div>
    </div>
</div>

<script>$('select.dropdown').dropdown();</script>