<?php

use ButtonGenerator\WOWP_Plugin;

defined( 'ABSPATH' ) || exit;

$default = $options['item_order']['pro_feature'] ?? 1;
$item_order = ! empty( $default ) ? 1 : 0;
$open = ! empty( $item_order ) ? ' open' : '';
?>

<div class="wpie-sidebar wpie-sidebar-features">
    <details class="wpie-item"<?php
	echo esc_attr( $open ); ?>>
        <input type="hidden" name="param[item_order][pro_feature]" class="wpie-item__toggle" value="<?php
		echo absint( $item_order ); ?>">
        <summary class="wpie-item_heading">
            <span class="wpie-item_heading_icon"><span
                        class="wpie-icon wpie_icon-rocket wpie-color-danger"></span></span>
            <span class="wpie-item_heading_label"><?php
				esc_html_e( 'PRO FEATURES', 'popup-box' ); ?></span>
            <span class="wpie-item_heading_type"></span>
            <span class="wpie-item_heading_toogle">
        <span class="wpie-icon wpie_icon-chevron-down"></span>
        <span class="wpie-icon wpie_icon-chevron-up "></span>
    </span>
        </summary>

        <div class="wpie-fields__box">
            <details class="wpie-details-sidebar">
                <summary>Item Types</summary>
                <div class="wpie-details-sidebar-box">
                    <ul>
                        <li><strong>Link:</strong> Create a link to any page on your website. You can also choose to
                            open the link in a new window.
                        </li>
                        <li><strong>Download:</strong> Download the intended file by bypassing their browser's default
                            behavior of potentially opening the file in a new tab or window.
                        </li>
                        <li><strong>Next Post:</strong> Generate a link to the next post within the current post's
                            category.
                        </li>
                        <li><strong>Previous Post:</strong> Generate a link to the previous post within the current
                            post's category.
                        </li>
                        <li><strong>Share:</strong> Create a link with sharing options for social media. Choose from 29
                            different social media services.
                        </li>
                        <li><strong>Translate:</strong> Offer your users the ability to translate your page in
                            real-time.
                        </li>
                        <li><strong>Print:</strong> Provide a link for printing the current page.</li>
                        <li><strong>Scroll To Top:</strong> Create a smooth-scrolling link that takes users to the top
                            of the page.
                        </li>
                        <li><strong>Scroll To Bottom:</strong> Create a smooth-scrolling link that takes users to the
                            bottom of the page.
                        </li>
                        <li><strong>Smooth Scroll:</strong> Enable this option for a more pleasant user experience when
                            navigating a page with anchor links.
                        </li>
                        <li><strong>Go Back:</strong> Allow users to navigate back to the previous page in their browser
                            history.
                        </li>
                        <li><strong>Go Forward:</strong> Create a link to the next page in the user's browser history.
                        </li>
                        <li><strong>Login:</strong> Create a link to your site's login page.</li>
                        <li><strong>Logout:</strong> Create a link for users to log out if they are currently logged in.
                        </li>
                        <li><strong>Lost Password:</strong> Create a link to the password reset page for users.</li>
                        <li><strong>Register:</strong> Create a link to the user registration page on your site.</li>
                    </ul>
                </div>

            </details>

            <details class="wpie-details-sidebar">
                <summary>Before/After content</summary>
                <div class="wpie-details-sidebar-box">
                    <p>Place your button directly before/after the page/post content, ideal for capturing user attention
                        at the beginning or end main text.</p>
                </div>

            </details>

            <details class="wpie-details-sidebar">
                <summary>Info Badge</summary>
                <div class="wpie-details-sidebar-box">
                    <p>Create information badges that seamlessly integrate with your buttons, adding a new layer of
                        visual interest and functionality.</p>
                </div>
            </details>

            <details class="wpie-details-sidebar">
                <summary>Tooltip</summary>
                <div class="wpie-details-sidebar-box">
                    <p>Add informative tooltips that appear on hover, providing users with valuable context and clarity
                        regarding your buttons.</p>
                </div>
            </details>

            <details class="wpie-details-sidebar">
                <summary>Custom Icons</summary>
                <div class="wpie-details-sidebar-box">
                    <ul>
                        <li><strong>Icon class:</strong> If you want to use an icon for the button from a different icon
                            font than FontAwesome Icons than you can use this option by simply inserting the icon class.
                        <li><strong>Image:</strong> Just paste the custom image URL for add to the button..</li>
                        <li><strong>Emoji:</strong> Use a letter or emoji as the icon. This can be a great alternative
                            to Font Awesome icons.
                        </li>
                    </ul>
                </div>

            </details>

            <details class="wpie-details-sidebar">
                <summary>Attention seekers</summary>
                <div class="wpie-details-sidebar-box">
                    <p>Add dynamic animation to the button that grab user attention and encourage interaction with your
                        calls to action.</p>
                </div>

            </details>

            <details class="wpie-details-sidebar">
                <summary>Hover Effects</summary>
                <div class="wpie-details-sidebar-box">
                    <ul>
                        <li><strong>Hover Effect:</strong></li>
                        <li><strong>Background Hover Effect:</strong> Transform the button's background color on hover,
                            adding a dynamic visual element
                        </li>
                        <li><strong>Icon Hover Effect:</strong> Bring buttons to life with animated icons on hover,
                            grabbing user attention and highlighting their purpose.
                        </li>
                        <li><strong>Border Hover Effect:</strong> Modify the button's border style, thickness, or color
                            on hover, creating a subtle yet effective visual cue for user interaction
                        </li>
                    </ul>
                </div>

            </details>

            <details class="wpie-details-sidebar">
                <summary>Google Events Tracking</summary>
                <div class="wpie-details-sidebar-box">
                    <p>Integrate Google Events Tracking to monitor user interactions with your buttons. You'll need to
                        have Google Analytics tracking code installed on your site to use this feature.</p>
                </div>

            </details>

            <details class="wpie-details-sidebar">
                <summary>Several Display Rules</summary>
                <div class="wpie-details-sidebar-box">
                    <p>Add several Display Rules for Control exactly where your menus appear using shortcodes, page
                        types, post categories/tags, author pages, and date archives.</p>
                </div>
            </details>

            <details class="wpie-details-sidebar">
                <summary>Remove on Mobile/Desktop</summary>
                <div class="wpie-details-sidebar-box">
                    <p>Completely remove the item from mobile or desktop devices.</p>
                </div>

            </details>
            <details class="wpie-details-sidebar">
                <summary>Multilingual Support</summary>
                <div class="wpie-details-sidebar-box">
                    <p>For websites catering to a global audience, PRO version allows you to restrict menu visibility to
                        specific languages. This ensures users only see menus relevant to their chosen language
                        setting.</p>
                </div>

            </details>
            <details class="wpie-details-sidebar">
                <summary>User Role Permissions</summary>
                <div class="wpie-details-sidebar-box">
                    <p>Define which user roles (e.g., Administrator, Editor, Author) have the ability to see the button.
                        This can be helpful for displaying internal buttons relevant only to website administrators or
                        for specific user groups.</p>
                </div>

            </details>
            <details class="wpie-details-sidebar">
                <summary>Scheduling</summary>
                <div class="wpie-details-sidebar-box">
                    <p>Schedule button appearances based on specific days, times, and dates. This allows you to promote
                        temporary events or campaigns without cluttering your website permanently.</p>
                </div>
            </details>

            <details class="wpie-details-sidebar">
                <summary>Browser Compatibility</summary>
                <div class="wpie-details-sidebar-box">
                    <p>Ensure your button display correctly across a wide range of browsers. If necessary, you can
                        choose to hide menus for specific browsers to address compatibility issues with outdated
                        software versions.</p>
                </div>
            </details>
        </div>
    </details>

    <div class="wpie-buttons">
        <a href="https://demo.wow-estore.com/button-generator-pro/" target="_blank" class="wpie-button is-demo">Demo</a>
        <a href="<?php echo esc_url( WOWP_Plugin::info( 'pro' ) ); ?>" target="_blank" class="wpie-button is-pro">GET PRO</a>
    </div>
</div>
