<section class="section bg-funfact">
    <div class="bg-overlay"></div>
    <div class="container">
        <div class="row" id="counter">
            @foreach ($funfacts as $item)
            <div class="col-lg-3">
                <div class="text-center lan_funfact p-4 mt-3 rounded text-white">
                    <div class="lan_fun_icon mb-3">
                        <i class="{{ $item['icon'] }} h1"></i>
                    </div>
                    <h1 class="lan_fun_value mb-1" data-count="{{ $item['count'] }}">0</h1>
                    <p class="lan_fun_name mb-0">{{ $item['name'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>