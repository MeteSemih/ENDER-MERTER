<section id="portfolio-2" class="section">
    <div class="container">
        <h1 id="events">ETKİNLİKLER</h1>
        <div class="gallery-wrapper">
            <div class="slider">
                @foreach($events = \App\Models\Event::all() as $event)
                    <div class="slide">
                        <div class="event-item">
                            <div class="event-description">
                                <div class="event-eyebrow">{{ $event->year }} | {{ $event->organitation }}</div>
                                <h3 id="event-type">{{ $event->event_type }}</h3>
                                <div class="event-description-text">{{ $event->location }}</div>

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <button class="slider-control prev">&#10094;</button>
            <button class="slider-control next">&#10095;</button>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const slider = document.querySelector('.slider');
        const slides = document.querySelectorAll('.slide');
        const prevBtn = document.querySelector('.prev');
        const nextBtn = document.querySelector('.next');
        let index = 0;

        function updateSlider() {
            slider.style.transform = `translateX(-${index * 100}%)`;
        }

        prevBtn.addEventListener('click', () => {
            index = (index > 0) ? index - 1 : slides.length - 1;
            updateSlider();
        });

        nextBtn.addEventListener('click', () => {
            index = (index < slides.length - 1) ? index + 1 : 0;
            updateSlider();
        });
    });

</script>
