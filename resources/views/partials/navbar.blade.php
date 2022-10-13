<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="/home">UTS PPW2 No.5</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
        data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{($title === "Home") ? 'active' : ''}}" href="/home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{($title === "Inisialisasi") ? 'active' : ''}}" href="/inisialisasi">Inisialisasi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{($title === "Mata Kuliah") ? 'active' : ''}}" href="/mata_kuliah">Mata Kuliah</a>
                </li>
            </ul>
        </div>
    </div>
</nav>