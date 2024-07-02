<!-- Offcanvas Search -->
<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbarEmptyShoppingCart">
    <div class="offcanvas-header justify-content-end border-0 pb-0">
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>

    <div class="offcanvas-body">
        <div class="text-center">
            @if($cartItems->isEmpty())
                <!-- Empty Cart Message -->
                <div class="mb-5">
                    <img class="avatar avatar-xl avatar-4x3" src="{{asset('frontend/svg/illustrations/oc-empty-cart.svg')}}" alt="SVG">
                </div>

                <div class="mb-5">
                    <h3>Your cart is currently empty</h3>
                    <p>Before proceeding to checkout, you must add some products to your shopping cart. You will find a lot of interesting products on our "Shop" page.</p>
                </div>
            @else
                <!-- Cart Items -->
                <div class="mb-5">
                    @foreach($cartItems as $item)
                        <a class="dropdown-item" href="{{ route('courses.show', $item->course->id) }}">
                            <img src="{{ asset('storage/' . $item->course->cover_image) }}" alt="{{ $item->course->title }}" style="width: 50px;">
                            {{ $item->course->title }}
                        </a>
                    @endforeach
                </div>
            @endif

            <a class="btn btn-primary btn-transition rounded-pill px-6" href="{{ route('cart.index') }}">Checkout </a>
        </div>
    </div>
</div>
