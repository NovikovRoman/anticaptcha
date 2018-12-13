<?php
namespace Anticaptcha;

interface interfaceAntiCaptchaTaskProtocol
{
    public function getPostData();

    public function setTaskInfo($taskInfo);

    public function getTaskSolution();
}