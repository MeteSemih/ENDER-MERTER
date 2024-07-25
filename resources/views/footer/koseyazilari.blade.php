<section id="portfolio-1" class="section">
    <h2 class="title-large" id="kose-yazilari">Köşe Yazıları</h2>
    <div class="container">
        <ul id="portfolio-list" class="flex-container">
            @foreach($yazilar = \App\Models\KoseYazilari::all() as $index => $yazi)
                <li class="flex-item" style="display: {{ $index < 5 ? 'block' : 'none' }}">
                    {{$yazi->title}}
                </li>
            @endforeach
        </ul>
        @if($yazilar->count() > 5)
            <button id="show-more" class="show-more-btn" data-state="show">Daha Fazla Göster</button>
        @endif
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const button = document.getElementById('show-more');
        const items = document.querySelectorAll('#portfolio-list .flex-item');
        const visibleCount = 5;
        let isShowingAll = false;

        // Başlangıçta sadece ilk 5 öğe gösterilir
        items.forEach((item, index) => {
            if (index >= visibleCount) {
                item.style.display = 'none';
            }
        });

        button.addEventListener('click', function() {
            if (isShowingAll) {
                // Tüm öğeleri gizle ve animasyon ekle
                items.forEach((item, index) => {
                    if (index >= visibleCount) {
                        item.classList.add('slide-down');
                        setTimeout(() => {
                            item.style.display = 'none';
                            item.classList.remove('slide-down');
                        }, 500); // Animasyon süresi
                    }
                });

                // Başlık kısmına kaydırma
                setTimeout(() => {
                    document.getElementById('kose-yazilari').scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }, 500); // Animasyon süresi ile uyumlu olmalı

                button.textContent = 'Daha Fazla Göster';
            } else {
                // Tüm öğeleri göster ve animasyon ekle
                items.forEach((item, index) => {
                    if (index >= visibleCount) {
                        item.style.display = 'block';
                        item.classList.add('slide-up');
                        setTimeout(() => {
                            item.classList.remove('slide-up');
                        }, 500); // Animasyon süresi
                    }
                });

                // Başlık kısmına kaydırma
                setTimeout(() => {
                    document.getElementById('kose-yazilari').scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }, 500); // Animasyon süresi ile uyumlu olmalı

                button.textContent = 'Daha Az Göster';
            }
            isShowingAll = !isShowingAll;
        });
    });


</script>
