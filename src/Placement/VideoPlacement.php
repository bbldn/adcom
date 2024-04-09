<?php

namespace BBLDN\AdCOM\Placement;

use BBLDN\AdCOM\Enum\SizeUnitEnum;
use BBLDN\AdCOM\Enum\ClickTypeEnum;
use BBLDN\AdCOM\Enum\PodSequenceEnum;
use BBLDN\AdCOM\Enum\ApiFrameworkEnum;
use BBLDN\AdCOM\Enum\CompanionTypeEnum;
use BBLDN\AdCOM\Enum\LinearityModeEnum;
use BBLDN\AdCOM\Enum\DeliveryMethodEnum;
use BBLDN\AdCOM\Enum\PlaybackMethodEnum;
use BBLDN\AdCOM\Enum\StartDelayModeEnum;
use BBLDN\AdCOM\Enum\SlotPositionPodEnum;
use BBLDN\AdCOM\Enum\PlacementPositionEnum;
use BBLDN\AdCOM\Enum\PlcmtSubtypeVideoEnum;
use BBLDN\AdCOM\Enum\ExpandableDirectionEnum;
use BBLDN\AdCOM\Enum\PlaybackCessationModeEnum;
use BBLDN\AdCOM\Enum\CreativeSubtypeAudioVideoEnum;

class VideoPlacement
{
    /**
     * @param list<string> $mime
     * @param list<int>|null $rqddurs
     * @param list<Companion>|null $comp
     * @param list<ApiFrameworkEnum>|null $api
     * @param list<CompanionTypeEnum>|null $comptype
     * @param list<DeliveryMethodEnum>|null $delivery
     * @param list<PlaybackMethodEnum>|null $playmethod
     * @param list<ExpandableDirectionEnum>|null $expdir
     * @param list<CreativeSubtypeAudioVideoEnum>|null $ctype
     * @param list<ExpandableDirectionEnum>|null $overlayexpdir
     */
    public function __construct(
        public array $mime,
        public int|null $h = null,
        public int|null $w = null,
        public int|null $boxing = 1,
        public int|null $maxext = 0,
        public int|null $skip = null,
        public array|null $api = null,
        public int|null $podid = null,
        public array|null $comp = null,
        public int|null $maxdur = null,
        public int|null $maxseq = null,
        public int|null $mindur = null,
        public int|null $poddur = null,
        public int|null $skipafter = 0,
        public array|null $ctype = null,
        public int|null $maxbitr = null,
        public int|null $minbitr = null,
        public int|null $skipmin = null,
        public array|null $expdir = null,
        public array|null $rqddurs = null,
        public array|null $comptype = null,
        public array|null $delivery = null,
        public array|null $playmethod = null,
        public float|null $mincpmpersec = null,
        public array|null $overlayexpdir = null,
        public ClickTypeEnum|null $clktype = null,
        public LinearityModeEnum|null $linear = null,
        public StartDelayModeEnum|null $delay = null,
        public PlacementPositionEnum|null $pos = null,
        public PlcmtSubtypeVideoEnum|null $ptype = null,
        public SizeUnitEnum|null $unit = SizeUnitEnum::DIPS,
        public PlaybackCessationModeEnum|null $playend = null,
        public PodSequenceEnum|null $podseq = PodSequenceEnum::ANY_POD,
        public SlotPositionPodEnum|null $slotinpod = SlotPositionPodEnum::ANY,
        public mixed $ext = null,
    ) {
    }
}
