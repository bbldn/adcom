<?php

namespace BBLDN\AdCOM\Placement;

use BBLDN\AdCOM\Enum\FeedTypeEnum;
use BBLDN\AdCOM\Enum\PodSequenceEnum;
use BBLDN\AdCOM\Enum\ApiFrameworkEnum;
use BBLDN\AdCOM\Enum\CompanionTypeEnum;
use BBLDN\AdCOM\Enum\DeliveryMethodEnum;
use BBLDN\AdCOM\Enum\PlaybackMethodEnum;
use BBLDN\AdCOM\Enum\StartDelayModeEnum;
use BBLDN\AdCOM\Enum\SlotPositionPodEnum;
use BBLDN\AdCOM\Enum\ExpandableDirectionEnum;
use BBLDN\AdCOM\Enum\PlaybackCessationModeEnum;
use BBLDN\AdCOM\Enum\VolumeNormalizationModeEnum;
use BBLDN\AdCOM\Enum\CreativeSubtypeAudioVideoEnum;

class AudioPlacement
{
    /**
     * @param list<int>|null $rqddurs
     * @param list<Companion>|null $comp
     * @param list<ApiFrameworkEnum>|null $api
     * @param list<CompanionTypeEnum>|null $comptype
     * @param list<DeliveryMethodEnum>|null $delivery
     * @param list<PlaybackMethodEnum>|null $playmethod
     * @param list<CreativeSubtypeAudioVideoEnum>|null $ctype
     * @param list<ExpandableDirectionEnum>|null $overlayexpdir
     */
    public function __construct(
        public string $mime,
        public int|null $skip = null,
        public int|null $skipmin = 0,
        public array|null $api = null,
        public int|null $podid = null,
        public array|null $comp = null,
        public int|null $maxdur = null,
        public int|null $maxext = null,
        public int|null $maxseq = null,
        public int|null $mindur = null,
        public int|null $poddur = null,
        public int|null $skipafter = 0,
        public array|null $ctype = null,
        public int|null $maxbitr = null,
        public int|null $minbitr = null,
        public array|null $rqddurs = null,
        public array|null $comptype = null,
        public array|null $delivery = null,
        public array|null $playmethod = null,
        public FeedTypeEnum|null $feed = null,
        public float|null $mincpmpersec = null,
        public array|null $overlayexpdir = null,
        public StartDelayModeEnum|null $delay = null,
        public VolumeNormalizationModeEnum|null $nvol = null,
        public PlaybackCessationModeEnum|null $playend = null,
        public PodSequenceEnum|null $podseq = PodSequenceEnum::ANY_POD,
        public SlotPositionPodEnum|null $slotinpod = SlotPositionPodEnum::ANY,
        public mixed $ext = null,
    ) {
    }
}
