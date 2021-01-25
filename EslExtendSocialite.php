<?php

namespace Erre2Web\Esl;

use SocialiteProviders\Manager\SocialiteWasCalled;

class EslExtendSocialite
{
    /**
     * Register the provider.
     *
     * @param \SocialiteProviders\Manager\SocialiteWasCalled $socialiteWasCalled
     */
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite(
            'esl',  Provider::class
        );
    }
}