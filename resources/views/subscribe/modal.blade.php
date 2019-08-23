<div class="modal fade" id="modalSubscriptionForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
            <h4 class="modal-title w-100 font-weight-bold">Subscribe</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <form action="{{ route('subscribe') }}" method="post">
            @csrf
            <div class="modal-body mx-3">
                <div class="md-form mb-4">
                    <label data-error="wrong" data-success="right" for="name">Your name</label>
                    <input type="text" id="form3" name="name" class="form-control validate" 
                        required placeholder="Your Name">
                </div>

                <div class="md-form mb-4">
                    <label data-error="wrong" data-success="right" for="email">Your email</label>
                    <input type="email" id="form2" class="form-control validate" name="email"
                        required placeholder="Your email">
                </div>

            </div>

            <div class="modal-footer d-flex justify-content-center">
                <button class="btn btn-success" type="submit">Send</button>
            </div>
            </form>
        </div>
    </div>
</div>