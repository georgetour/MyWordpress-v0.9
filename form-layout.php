<div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <label class="sr-only" for="contact-name">Name</label>
                [text* your-name class:form-control class:input-lg id:contact-name placeholder "Your name"]
            </div>
        </div>

        <div class="col-sm-6">
            <div class="form-group">
                <label class="sr-only" for="contact-email">Email</label>
                [email* your-email class:form-control class:input-lg id:contact-email placeholder "Your email"]
            </div>
        </div>
        <div class="col-sm-12">
        <div class="form-group">
            <label class="sr-only" for="contact-subject">Subject</label>
            [text your-subject class:form-control class:input-lg id:contact-subject placeholder "Your subject"]
        </div>
        </div>

        <div class="col-sm-12">
            <div class="form-group">
                <label class="sr-only" for="contact-words">Message</label>
                [textarea your-message class:form-control class:input-lg id:contact-words x3 placeholder "Your message"]
            </div>
        </div>
</div>
[submit class:btn class:btn-info class:btn-lg class:pull-right "Message me now!"]
