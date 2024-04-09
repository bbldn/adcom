<?php

namespace BBLDN\AdCOM\Placement;

class AssetFormat
{
    public function __construct(
        public int $id,
        public int|null $req = 0,
        public DataAssetFormat|null $data = null,
        public ImageAssetFormat|null $img = null,
        public VideoPlacement|null $video = null,
        public TitleAssetFormat|null $title = null,
        public mixed $ext = null,
    ) {
    }
}
