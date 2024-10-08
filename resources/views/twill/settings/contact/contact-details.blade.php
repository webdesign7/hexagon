@twillBlockTitle('Contact details')
@twillBlockIcon('text')

<x-twill::input :required="true" name="address" label="Address (not used)" placeholder="Enter your address" />
<x-twill::input :required="true" name="email" label="Email address" placeholder="Enter your email here" />
<x-twill::input :required="true" name="phone" label="Phone number(not used)" placeholder="Enter your phone number" />
<x-twill::input :required="true" name="calendly" label="Calendly link" placeholder="Enter calendly link" />


<x-twill::repeater
    type="social-media-links"
/>
