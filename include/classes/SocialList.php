<?php


namespace Main;


class SocialList
{
    private $block;
    private $list;
    private $attributes;
    private $theme;

    public function __construct(
        $block,
        $list = array("tg", "sk", "wa", "ms", "vb", "vk", "em"),
        $theme = "white",
        $additionalAttributes = false
    ) {
        $this->block = $block;
        $this->list = $list;
        $this->theme = $theme;
        $this->attributes = $additionalAttributes;
        self::showTemplate();
    }

    private function getList()
    {
        return $this->list;
    }

    private function getAttributes()
    {
        return $this->attributes;
    }

    private function getBlock()
    {
        return $this->block;
    }

    private function getTheme()
    {
        return $this->theme;
    }

    public function showTemplate()
    {
        $attributes = $this->getAttributes();
        $list = $this->getList();
        $block = $this->getBlock();
        $theme = $this->getTheme();

        include($_SERVER['DOCUMENT_ROOT'] . '/include/components/_social_list.php');
    }
}