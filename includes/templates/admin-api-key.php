<article class="elfsight-admin-page-api-key elfsight-admin-page" data-elfsight-admin-page-id="api-key">
    <div class="elfsight-admin-page-api-key-container">
        <form class="elfsight-admin-page-api-key-form">
            <h4 class="elfsight-admin-page-api-key-form-title-connect elfsight-admin-page-api-key-form-title">Set your YouTube API Key</h4>
            <h4 class="elfsight-admin-page-api-key-form-title-success elfsight-admin-page-api-key-form-title">Your YouTube API Key</h4>

            <div class="elfsight-admin-page-api-key-form-description-wrapper">
                <span class="elfsight-admin-page-api-key-form-description elfsight-admin-page-api-key-form-description-connect">
                    Setting your own YouTube API Key is optional due to using your own quota.
                </span>
                <span class="elfsight-admin-page-api-key-form-description elfsight-admin-page-api-key-form-description-success">
                    You have set a YouTube API Key and your plugin is working correctly now.
                </span>
            </div>

            <input class="elfsight-admin-page-api-key-form-input" value="<?php echo elfsight_youtube_gallery_get_api_key(); ?>" data-nonce="<?php echo wp_create_nonce('elfsight_youtube_gallery_update_api_key_nonce'); ?>" type="text" placeholder="YouTube API Key">

            <a class="elfsight-admin-button elfsight-admin-button-large elfsight-admin-button-green elfsight-admin-page-api-key-form-button elfsight-admin-page-api-key-form-button-connect" href="javascript:void(0)">Save API key</a>

            <div class="elfsight-admin-page-api-key-form-reload">This page will be reload at few seconds..</div>
        </form>
    </div>
</article>