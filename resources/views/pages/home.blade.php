<x-app-layout>
    @include('pages.partials.home.hero-slider', ['sliders' => $sliders])

    @include('pages.partials.home.about-teaser', ['settings' => $settings])

    @include('pages.partials.home.partner-slider', ['partners' => $partners])

    @include('pages.partials.home.news-teaser', ['latestPosts' => $latestPosts])

    @include('pages.partials.home.innovations-slider')

    @include('pages.partials.home.product-categories', ['productCategories' => $productCategories])

</x-app-layout>
