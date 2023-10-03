<!-- hero signup -->
<section class="color-bg-subtle py-6 lg:py-8">
  <div class="container mx-auto p-responsive-blog">
    <div class="newsletter rounded-lg">
      <div class="flex flex-row flex-wrap color-bg-subtle rounded-lg">
        <div class="p-6 lg:p-7 py-6 lg:py-7 w-full lg:w-1/2 xl:w-7/12">
          <h2 class="text-xxxl text-white font-semibold tracking-tight">Subscribe to The GitHub Insider</h2>
          <p class="text-large text-gray-400 mt-2 mb-0">Discover tips, technical guides, and best practices in our monthly newsletter for developers.</p>
        </div>
        <div class="p-3 lg:p-5 pt-3 lg:pt-7 pb-3 lg:pb-7 w-full lg:w-1/2 xl:w-5/12">

          <form method="post" action="#" class="form-validator">
            <div class="flex flex-row items-center newsletter-form rounded-lg required form-group errored">
              <div class="w-full md:w-2/3 without-ring"> <!-- 3/4 width for the email input -->
                <!-- email input -->
                <input type="email" required id="newsletter_emailAddress" name="emailAddress" placeholder="<?php echo esc_attr_x('Your email address', 'placeholder', 'tailpress'); ?>" class="w-full h-full mb-2 md:mb-0 text-lg newsletter-field rounded-lg text-current" value="">
              </div>

              <input type="hidden" id="newsletter_classification" name="classification" value="Practitioner">

              <!-- button desktop -->
              <button type="submit" class="hidden md:flex w-1/3 form-validator-submit newsletter-submit flex-shrink flex-row font-semibold rounded-lg items-center arrow-target-mktg md:mb-0 f3-mktg btn-mktg mx-2 px-2">
                <span class="text-gradient-purple-coral">
                  Subscribe
                </span>
                <svg xmlns="http://www.w3.org/2000/svg" class="octicon arrow-symbol-mktg" width="20" height="20" viewBox="0 0 16 16" fill="none">
                  <path fill="currentColor" d="M7.28033 3.21967C6.98744 2.92678 6.51256 2.92678 6.21967 3.21967C5.92678 3.51256 5.92678 3.98744 6.21967 4.28033L7.28033 3.21967ZM11 8L11.5303 8.53033C11.8232 8.23744 11.8232 7.76256 11.5303 7.46967L11 8ZM6.21967 11.7197C5.92678 12.0126 5.92678 12.4874 6.21967 12.7803C6.51256 13.0732 6.98744 13.0732 7.28033 12.7803L6.21967 11.7197ZM6.21967 4.28033L10.4697 8.53033L11.5303 7.46967L7.28033 3.21967L6.21967 4.28033ZM10.4697 7.46967L6.21967 11.7197L7.28033 12.7803L11.5303 8.53033L10.4697 7.46967Z"></path>
                  <path class="octicon-chevrow-stem" stroke="currentColor" d="M1.75 8H11" stroke-width="1.5" stroke-linecap="round"></path>
                </svg>
              </button>


            </div>
            <div class="checkbox text-gray-400 text-xs m-0 mt-2 form-group">
              <label class="font-normal">
                <input id="optincheckbox" name="marketingEmailOptIn1" type="checkbox" value="True" class="accent-gray-500 bg-gray-800 text-gray-700 rounded cursor-pointer">
                Yes please, I’d like GitHub and affiliates to use my information for personalized communications, targeted advertising and campaign effectiveness. See the <a href="https://github.com/site/privacy" target="blank">GitHub Privacy Statement</a> for more details. </label>
            </div>

            <!-- button mobile -->
            <button type="submit" class="md:hidden form-validator-submit newsletter-submit flex-shrink-0 flex flex-row w-full font-semibold rounded-lg items-center arrow-target-mktg mt-3 f3-mktg btn-mktg">
              <span class="text-gradient-purple-coral">
                Subscribe
              </span>
              <svg xmlns="http://www.w3.org/2000/svg" class="octicon arrow-symbol-mktg" width="20" height="20" viewBox="0 0 16 16" fill="none">
                <path fill="currentColor" d="M7.28033 3.21967C6.98744 2.92678 6.51256 2.92678 6.21967 3.21967C5.92678 3.51256 5.92678 3.98744 6.21967 4.28033L7.28033 3.21967ZM11 8L11.5303 8.53033C11.8232 8.23744 11.8232 7.76256 11.5303 7.46967L11 8ZM6.21967 11.7197C5.92678 12.0126 5.92678 12.4874 6.21967 12.7803C6.51256 13.0732 6.98744 13.0732 7.28033 12.7803L6.21967 11.7197ZM6.21967 4.28033L10.4697 8.53033L11.5303 7.46967L7.28033 3.21967L6.21967 4.28033ZM10.4697 7.46967L6.21967 11.7197L7.28033 12.7803L11.5303 8.53033L10.4697 7.46967Z"></path>
                <path class="octicon-chevrow-stem" stroke="currentColor" d="M1.75 8H11" stroke-width="1.5" stroke-linecap="round"></path>
              </svg>
            </button>

          </form>


        </div>
      </div>
    </div>
  </div>
</section>
<!-- /hero signup -->
