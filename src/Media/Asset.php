<?php

namespace BBLDN\AdCOM\Media;

class Asset
{
    public function __construct(
        public int|null $req = 0,
        public int|null $id = null,
        public DataAsset|null $data = null,
        public LinkAsset|null $link = null,
        public ImageAsset|null $image = null,
        public TitleAsset|null $title = null,
        public VideoAsset|null $video = null,
        public mixed $ext = null,
    ) {
    }
}
