<main class="sui-wrap">
    <div class="sui-header">
        <h1 class="sui-header-title">Sitemap Configurator</h1>
    </div>
    <div class="sui-box">
        <div class="sui-box-header">
            <!-- Box title with icon -->
            <h3 class="sui-box-title">
				<?php _e( 'Configure Your Sitemap', 'sitemap-configurator' ); ?>
            </h3>
        </div>
        <div class="sui-box-body">
            <form action="" method="POST" id="osc-options">
                <div class="sui-form-field">
                    <label for="post-sitemaps" class="sui-toggle">
                        <input
                                name="osc_options[enable_posts]"
                                type="checkbox"
                                id="post-sitemaps"
                                aria-labelledby="unique-id-label"
                                aria-describedby="unique-id-description"
							<?php echo $osc_options->get( 'enable_posts', false ) == true ? 'checked' : null; ?>
                                value="1"
                        />
                        <span class="sui-toggle-slider" aria-hidden="true"></span>
                        <span id="unique-id-label" class="sui-toggle-label">Toggle Post Sitemaps</span>
                        <span id="unique-id-description"
                              class="sui-description">Show/hide posts on default sitemap.xml</span>
                    </label>
                </div>
                <div class="sui-form-field">
                    <label for="page-sitemaps" class="sui-toggle">
                        <input
                                name="osc_options[enable_pages]"
                                type="checkbox"
                                id="page-sitemaps"
                                aria-labelledby="unique-id-label"
                                aria-describedby="unique-id-description"
							<?php echo $osc_options->get( 'enable_pages', false ) == true ? 'checked' : null; ?>
                                value="1"
                        />
                        <span class="sui-toggle-slider" aria-hidden="true"></span>
                        <span id="unique-id-label" class="sui-toggle-label">Toggle Page Sitemaps</span>
                        <span id="unique-id-description"
                              class="sui-description">Show/hide pages on default sitemap.xml</span>
                    </label>
                </div>
                <div class="sui-form-field">
                    <label for="user-sitemaps" class="sui-toggle">
                        <input
                                name="osc_options[enable_users]"
                                type="checkbox"
                                id="user-sitemaps"
                                aria-labelledby="unique-id-label"
                                aria-describedby="unique-id-description"
							<?php echo $osc_options->get( 'enable_users', false ) == true ? 'checked' : null; ?>
                                value="1"
                        />
                        <span class="sui-toggle-slider" aria-hidden="true"></span>
                        <span id="unique-id-label" class="sui-toggle-label">Toggle User Sitemaps</span>
                        <span id="unique-id-description"
                              class="sui-description">Show/hide users on default sitemap.xml</span>
                    </label>
                </div>
                <div class="sui-form-field">
                    <label for="tag-sitemaps" class="sui-toggle">
                        <input
                                name="osc_options[enable_tags]"
                                type="checkbox"
                                id="tag-sitemaps"
                                aria-labelledby="unique-id-label"
                                aria-describedby="unique-id-description"
							<?php echo $osc_options->get( 'enable_tags', false ) == true ? 'checked' : null; ?>
                                value="1"
                        />
                        <span class="sui-toggle-slider" aria-hidden="true"></span>
                        <span id="unique-id-label" class="sui-toggle-label">Toggle Tag Sitemaps</span>
                        <span id="unique-id-description"
                              class="sui-description">Show/hide tags on default sitemap.xml</span>
                    </label>
                </div>
                <div class="sui-form-field">
                    <label for="category-sitemaps" class="sui-toggle">
                        <input
                                name="osc_options[enable_categories]"
                                type="checkbox"
                                id="category-sitemaps"
                                aria-labelledby="unique-id-label"
                                aria-describedby="unique-id-description"
							<?php echo $osc_options->get( 'enable_categories', false ) == true ? 'checked' : null; ?>
                                value="1"
                        />
                        <span class="sui-toggle-slider" aria-hidden="true"></span>
                        <span id="unique-id-label" class="sui-toggle-label">Toggle Category Sitemaps</span>
                        <span id="unique-id-description" class="sui-description">Show/hide categories on default sitemap.xml</span>
                    </label>
                </div>
                <div class="sui-form-field">
                    <button type="submit" class="sui-button sui-button-green sui-button-lg">Save Settings</button>

                </div>
            </form>
            <div>
                <p>Made with ❤️️ by <a href="https://profiles.wordpress.org/optimocha/" target="_blank">Optimocha</a>
                </p>
            </div>
        </div>
    </div>
    <div class="sui-floating-notices">
        <div role="alert"
             id="osc-options-updated"
             class="sui-notice"
             aria-live="assertive"
        >
			<?php _e( 'Options updated successfully.', 'sitemap-configurator' ) ?>
        </div>
    </div>
</main>