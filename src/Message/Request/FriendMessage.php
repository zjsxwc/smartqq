<?php
/**
 * SmartQQ Library
 * @author Tao <taosikai@yeah.net>
 */
namespace Slince\SmartQQ\Message\Request;

use Slince\SmartQQ\Message\Content;

class FriendMessage extends Message
{
    /**
     * 用户编号
     * @var int
     */
    protected $to;

    public function __construct($to, Content $content)
    {
        $this->to = $to;
        parent::__construct($content);
    }
}