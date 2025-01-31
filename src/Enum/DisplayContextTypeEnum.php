<?php

namespace BBLDN\AdCOM\Enum;

enum DisplayContextTypeEnum: int
{
    case CONTENT_CENTRIC_CONTEXT = 10;

    case CONTENT_CENTRIC_CONTEXT_PRIMARILY_ARTICLE_CONTENT = 11;

    case CONTENT_CENTRIC_CONTEXT_PRIMARILY_VIDEO_CONTENT = 12;

    case CONTENT_CENTRIC_CONTEXT_PRIMARILY_AUDIO_CONTENT = 13;

    case CONTENT_CENTRIC_CONTEXT_PRIMARILY_IMAGE_CONTENT = 14;

    case CONTENT_CENTRIC_CONTEXT_USER_GENERATED_CONTENT = 15;

    case SOCIAL_CENTRIC_CONTEXT = 20;

    case SOCIAL_CENTRIC_CONTEXT_PRIMARILY_EMAIL_CONTENT = 21;

    case SOCIAL_CENTRIC_CONTEXT_PRIMARILY_CHAT_IM_CONTENT = 22;

    case PRODUCT_CONTEXT = 30;

    case PRODUCT_CONTEXT_APP_STORE_MARKETPLACE = 31;

    case PRODUCT_CONTEXT_PRODUCT_REVIEWS_SITE_PRIMARILY = 32;
}
