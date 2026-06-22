<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Akbar Maulana - Information System Security Enthusiast & Full-Stack Web Developer. Penetration Testing, Bug Bounty, Laravel.">
<title>Akbar Maulana | Cyber Portfolio</title>
<meta name="csrf-token" content="{{ csrf_token() }}">
@vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="bg-[#030712] text-slate-200 grid-bg">

{{-- NAVBAR --}}
<nav id="navbar" class="fixed top-0 w-full z-50 navbar-glass transition-all duration-300">
  <div class="max-w-6xl mx-auto px-6 py-4 flex items-center justify-between">
    <a href="#hero" class="font-mono text-lg font-bold neon-text tracking-wider">&lt;AKBAR /&gt;</a>
    <div class="hidden md:flex items-center gap-8">
      @foreach(['About'=>'#about','Skills'=>'#skills','Projects'=>'#projects','Contact'=>'#contact'] as $label=>$href)
      <a href="{{ $href }}" class="nav-link">{{ $label }}</a>
      @endforeach
    </div>
    <a href="#contact" class="btn-glow text-xs px-4 py-2">Hire Me</a>
  </div>
</nav>

{{-- HERO --}}
<section id="hero" class="relative min-h-screen flex items-center justify-center overflow-hidden">
  <div class="absolute inset-0 pointer-events-none">
    <div class="absolute top-1/4 left-1/4 w-72 h-72 bg-cyan-500/5 rounded-full blur-3xl float"></div>
    <div class="absolute bottom-1/4 right-1/4 w-96 h-96 bg-emerald-500/5 rounded-full blur-3xl float-delay"></div>
  </div>
  <div class="relative z-10 max-w-4xl mx-auto px-6 text-center">
    <div class="terminal max-w-xl mx-auto mb-10 text-left reveal">
      <div class="terminal-header">
        <div class="terminal-dot bg-red-500"></div>
        <div class="terminal-dot bg-yellow-500"></div>
        <div class="terminal-dot bg-green-500"></div>
        <span class="ml-2 text-xs text-slate-500 font-mono">akbar@cyberdev ~ $</span>
      </div>
      <div class="p-5 space-y-2 text-sm font-mono">
        <p class="text-slate-500">$ whoami</p>
        <p class="text-green-400">akbar_maulana</p>
        <p class="text-slate-500 mt-2">$ cat mission.txt</p>
        <p class="text-cyan-400 cursor-blink" id="typing-text"></p>
      </div>
    </div>
    <div class="reveal">
      <p class="font-mono text-xs text-cyan-400 tracking-widest mb-4">// WELCOME TO MY DIGITAL DOMAIN</p>
      <h1 class="text-5xl md:text-7xl font-black mb-4">
        <span class="gradient-text">Akbar</span> <span class="text-white">Maulana</span>
      </h1>
      <p class="text-lg md:text-xl text-slate-400 mb-8 max-w-2xl mx-auto leading-relaxed">
        Information System Security Enthusiast &amp; Full-Stack Web Developer
      </p>
      <div class="flex flex-wrap gap-4 justify-center">
        <a href="#projects" class="btn-glow"><span>🚀</span> View Projects</a>
        <a href="#contact" class="btn-glow" style="border-color:rgba(0,255,136,0.4);color:var(--neon-green)"><span>📡</span> Get In Touch</a>
      </div>
    </div>
  </div>
  <div class="absolute bottom-8 left-1/2 -translate-x-1/2 animate-bounce">
    <svg class="w-5 h-5 text-cyan-500 opacity-60" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
  </div>
</section>

<div class="section-divider"></div>

{{-- ABOUT --}}
<section id="about" class="py-24 max-w-6xl mx-auto px-6">
  <div class="section-tag reveal">about_me.exe</div>
  <div class="grid md:grid-cols-2 gap-14 items-center">
    <div class="reveal-left">
      <h2 class="text-4xl font-bold mb-6">About <span class="gradient-text">Me</span></h2>
      <p class="text-slate-400 leading-relaxed mb-4">
        Halo! Saya <strong class="text-white">Akbar Maulana</strong>, mahasiswa <strong class="text-cyan-400">Keamanan Sistem Informasi</strong> di Politeknik Negeri Bengkalis.
      </p>
      <p class="text-slate-400 leading-relaxed mb-4">
        Saya memiliki passion mendalam di bidang <span class="text-emerald-400 font-semibold">manual penetration testing</span>, <span class="text-emerald-400 font-semibold">bug bounty hunting</span>, dan membangun aplikasi web yang aman dari ancaman siber.
      </p>
      <p class="text-slate-400 leading-relaxed mb-8">
        Motto saya: <em class="text-cyan-300 font-mono">"Securing the Web & Building the Future"</em> — karena keamanan dan inovasi harus berjalan beriringan.
      </p>
      <div class="grid grid-cols-2 gap-4">
        @foreach([['📍','Domisili','Bengkalis, Riau'],['🎓','Institusi','Poltek Negeri Bengkalis'],['🔐','Fokus','Cybersecurity & Dev'],['🏴‍☠️','Status','Open to Collaborate']] as $info)
        <div class="neon-border card p-4">
          <p class="text-lg mb-1">{{ $info[0] }}</p>
          <p class="text-xs text-slate-500 font-mono">{{ $info[1] }}</p>
          <p class="text-sm text-slate-300 font-semibold">{{ $info[2] }}</p>
        </div>
        @endforeach
      </div>
    </div>
    <div class="reveal-right flex justify-center">
      <div class="relative">
        <div class="w-64 h-64 md:w-80 md:h-80 rounded-2xl neon-border card overflow-hidden relative">
          <div class="absolute inset-0 bg-gradient-to-br from-cyan-500/20 to-emerald-500/20 flex items-center justify-center">
            <div class="text-center">
              <div class="text-8xl mb-4 easter-egg" title="EASTEREGG: One Piece Jolly Roger 🏴‍☠️">☠️</div>
              <p class="font-mono text-xs text-cyan-400">&lt; Akbar.jpg /&gt;</p>
              <p class="text-slate-500 text-xs mt-1 font-mono">Full-Stack | SecOps</p>
            </div>
          </div>
        </div>
        <div class="absolute -top-4 -right-4 w-24 h-24 bg-cyan-500/10 rounded-full blur-xl"></div>
        <div class="absolute -bottom-4 -left-4 w-24 h-24 bg-emerald-500/10 rounded-full blur-xl"></div>
      </div>
    </div>
  </div>
</section>

<div class="section-divider"></div>

{{-- SKILLS --}}
<section id="skills" class="py-24 bg-[#0d1117]/50">
  <div class="max-w-6xl mx-auto px-6">
    <div class="section-tag reveal">skills_matrix.sh</div>
    <h2 class="text-4xl font-bold mb-3 reveal">Tech <span class="gradient-text">Arsenal</span></h2>
    <p class="text-slate-500 mb-12 reveal">Tools & technologies I wield in battle.</p>
    <div class="grid md:grid-cols-3 gap-8">
      {{-- Web Dev --}}
      <div class="card neon-border p-6 reveal">
        <div class="flex items-center gap-3 mb-5">
          <div class="w-10 h-10 rounded-lg bg-cyan-500/10 flex items-center justify-center text-xl">🌐</div>
          <h3 class="font-bold text-white">Web Development</h3>
        </div>
        <div class="space-y-4">
          @foreach(['Laravel'=>90,'PHP Native'=>85,'MySQL'=>80,'Tailwind CSS'=>88,'JavaScript'=>75] as $skill=>$pct)
          <div>
            <div class="flex justify-between text-xs mb-1">
              <span class="text-slate-400 font-mono">{{ $skill }}</span>
              <span class="text-cyan-400">{{ $pct }}%</span>
            </div>
            <div class="progress-bar"><div class="progress-fill" data-width="{{ $pct }}"></div></div>
          </div>
          @endforeach
        </div>
        <div class="flex flex-wrap gap-2 mt-5">
          @foreach(['Laravel','PHP','MySQL','Tailwind','JS'] as $t)
          <span class="skill-pill">{{ $t }}</span>
          @endforeach
        </div>
      </div>
      {{-- Cybersecurity --}}
      <div class="card neon-border p-6 reveal" style="transition-delay:0.1s">
        <div class="flex items-center gap-3 mb-5">
          <div class="w-10 h-10 rounded-lg bg-emerald-500/10 flex items-center justify-center text-xl">🔐</div>
          <h3 class="font-bold text-white">Cybersecurity</h3>
        </div>
        <div class="space-y-4">
          @foreach(['Penetration Testing'=>85,'Bug Bounty'=>78,'Android Exploitation'=>72,'OSINT'=>75,'Web App Security'=>88] as $skill=>$pct)
          <div>
            <div class="flex justify-between text-xs mb-1">
              <span class="text-slate-400 font-mono">{{ $skill }}</span>
              <span class="text-emerald-400">{{ $pct }}%</span>
            </div>
            <div class="progress-bar"><div class="progress-fill" data-width="{{ $pct }}" style="background:linear-gradient(90deg,#00ff88,#00d4ff)"></div></div>
          </div>
          @endforeach
        </div>
        <div class="flex flex-wrap gap-2 mt-5">
          @foreach(['PenTest','Bug Bounty','AMYTH','OSINT','SecOps'] as $t)
          <span class="skill-pill green">{{ $t }}</span>
          @endforeach
        </div>
      </div>
      {{-- Others --}}
      <div class="card neon-border p-6 reveal" style="transition-delay:0.2s">
        <div class="flex items-center gap-3 mb-5">
          <div class="w-10 h-10 rounded-lg bg-purple-500/10 flex items-center justify-center text-xl">🤖</div>
          <h3 class="font-bold text-white">Others</h3>
        </div>
        <div class="space-y-4">
          @foreach(['Machine Learning'=>65,'Python'=>70,'Git & GitHub'=>82,'Linux CLI'=>80,'Docker'=>60] as $skill=>$pct)
          <div>
            <div class="flex justify-between text-xs mb-1">
              <span class="text-slate-400 font-mono">{{ $skill }}</span>
              <span class="text-purple-400">{{ $pct }}%</span>
            </div>
            <div class="progress-bar"><div class="progress-fill" data-width="{{ $pct }}" style="background:linear-gradient(90deg,#b44fff,#00d4ff)"></div></div>
          </div>
          @endforeach
        </div>
        <div class="flex flex-wrap gap-2 mt-5">
          @foreach(['ML','Python','Git','Linux','Docker'] as $t)
          <span class="skill-pill purple">{{ $t }}</span>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</section>

<div class="section-divider"></div>

{{-- PROJECTS --}}
<section id="projects" class="py-24 max-w-6xl mx-auto px-6">
  <div class="section-tag reveal">projects.json</div>
  <h2 class="text-4xl font-bold mb-3 reveal">Featured <span class="gradient-text">Projects</span></h2>
  <p class="text-slate-500 mb-12 reveal">Things I've built that I'm proud of.</p>
  <div class="grid md:grid-cols-2 gap-8">
    @php
    $projects = [
      ['🎬','JejakLayar','Aplikasi web arsip digital berbasis peta interaktif. Dokumentasi dan katalog konten budaya dengan integrasi map.','Laravel, Tailwind CSS, MySQL, Leaflet.js',['Laravel','Tailwind','MySQL','Maps'],'#00d4ff'],
      ['🏪','Mall-UMKM','Platform marketplace digital untuk UMKM lokal. Membantu pengusaha kecil menjangkau pasar lebih luas secara digital.','Laravel, PHP, MySQL, Bootstrap',['Laravel','E-Commerce','UMKM','PHP'],'#00ff88'],
      ['🛡️','Arunikacyber','Tim layanan digital profesional menyediakan web design, hosting, dan solusi keamanan digital untuk klien.','Web Design, Hosting, Security, Branding',['CyberSec','WebDesign','Hosting','Branding'],'#b44fff'],
      ['🏡','PKM-PM Pangkalan Batang','Proyek digitalisasi sistem manajemen desa dalam program PKM-PM. Modernisasi administrasi desa berbasis web.','Laravel, PostgreSQL, Tailwind CSS',['Laravel','PostgreSQL','Government','PKM'],'#f59e0b'],
    ];
    @endphp
    @foreach($projects as $i => $p)
    <div class="card neon-border p-6 group reveal" style="transition-delay:{{ $i*0.1 }}s">
      <div class="flex items-start justify-between mb-4">
        <div class="text-4xl">{{ $p[0] }}</div>
        <div class="flex gap-2">
          <span class="text-xs font-mono px-2 py-1 rounded" style="background:rgba(0,212,255,0.08);color:{{ $p[5] }};border:1px solid {{ $p[5] }}33">Featured</span>
        </div>
      </div>
      <h3 class="text-xl font-bold text-white mb-2 group-hover:text-cyan-400 transition-colors">{{ $p[1] }}</h3>
      <p class="text-slate-400 text-sm leading-relaxed mb-4">{{ $p[2] }}</p>
      <p class="text-xs text-slate-600 font-mono mb-4">{{ $p[3] }}</p>
      <div class="flex flex-wrap gap-2">
        @foreach($p[4] as $tag)
        <span class="text-xs px-2 py-1 rounded font-mono" style="background:{{ $p[5] }}15;color:{{ $p[5] }};border:1px solid {{ $p[5] }}30">{{ $tag }}</span>
        @endforeach
      </div>
    </div>
    @endforeach
  </div>
</section>

<div class="section-divider"></div>

{{-- CONTACT --}}
<section id="contact" class="py-24 bg-[#0d1117]/50">
  <div class="max-w-4xl mx-auto px-6">
    <div class="section-tag reveal">contact.sh</div>
    <h2 class="text-4xl font-bold mb-3 reveal">Get In <span class="gradient-text">Touch</span></h2>
    <p class="text-slate-500 mb-12 reveal">Have a project or want to collaborate? Let's connect!</p>

    @if(session('success'))
    <div class="mb-6 p-4 rounded-lg border border-emerald-500/40 bg-emerald-500/10 text-emerald-400 font-mono text-sm reveal">
      ✅ {{ session('success') }}
    </div>
    @endif

    <div class="grid md:grid-cols-5 gap-10">
      <div class="md:col-span-3 reveal-left">
        <form action="{{ route('contact.store') }}" method="POST" class="space-y-5">
          @csrf
          <div class="grid grid-cols-2 gap-4">
            <div>
              <label class="block text-xs font-mono text-slate-500 mb-2">// name</label>
              <input type="text" name="name" placeholder="Akbar Maulana" class="cyber-input @error('name') border-red-500 @enderror" value="{{ old('name') }}" required>
              @error('name')<p class="text-red-400 text-xs mt-1">{{ $message }}</p>@enderror
            </div>
            <div>
              <label class="block text-xs font-mono text-slate-500 mb-2">// email</label>
              <input type="email" name="email" placeholder="you@example.com" class="cyber-input @error('email') border-red-500 @enderror" value="{{ old('email') }}" required>
              @error('email')<p class="text-red-400 text-xs mt-1">{{ $message }}</p>@enderror
            </div>
          </div>
          <div>
            <label class="block text-xs font-mono text-slate-500 mb-2">// subject</label>
            <input type="text" name="subject" placeholder="Project Collaboration / Bug Report..." class="cyber-input" value="{{ old('subject') }}">
          </div>
          <div>
            <label class="block text-xs font-mono text-slate-500 mb-2">// message</label>
            <textarea name="message" rows="5" placeholder="Ceritakan project kamu..." class="cyber-input resize-none @error('message') border-red-500 @enderror" required>{{ old('message') }}</textarea>
            @error('message')<p class="text-red-400 text-xs mt-1">{{ $message }}</p>@enderror
          </div>
          <button type="submit" class="btn-glow w-full justify-center py-3">
            <span>📡</span> Kirim Pesan
          </button>
        </form>
      </div>
      <div class="md:col-span-2 reveal-right space-y-5">
        <div class="card neon-border p-5">
          <p class="text-xs font-mono text-slate-500 mb-4">// connect_with_me</p>
          @php
          $links = [
            ['🐙','GitHub','github.com/akbarmaulana','https://github.com','#00d4ff'],
            ['💼','LinkedIn','Akbar Maulana','https://linkedin.com','#0ea5e9'],
            ['📧','Email','akbarmaulana@dev.id','mailto:akbarmaulana@dev.id','#00ff88'],
            ['📍','Lokasi','Bengkalis, Riau, Indonesia','#','#f59e0b'],
          ];
          @endphp
          @foreach($links as $l)
          <a href="{{ $l[3] }}" target="_blank" class="flex items-center gap-3 p-3 rounded-lg hover:bg-white/5 transition group mb-2">
            <div class="w-9 h-9 rounded-lg flex items-center justify-center text-lg" style="background:{{ $l[4] }}15;border:1px solid {{ $l[4] }}30">{{ $l[0] }}</div>
            <div>
              <p class="text-xs text-slate-500 font-mono">{{ $l[1] }}</p>
              <p class="text-sm text-slate-300 group-hover:text-white transition">{{ $l[2] }}</p>
            </div>
          </a>
          @endforeach
        </div>
        <div class="card neon-border p-5 text-center">
          <div class="text-4xl mb-2 easter-egg" title="Easter Egg: Record of Ragnarok - Götterdämmerung!">⚔️</div>
          <p class="font-mono text-xs text-slate-600">// easter_egg_2.hidden</p>
          <p class="text-slate-500 text-xs mt-1">Hover me...</p>
        </div>
      </div>
    </div>
  </div>
</section>

{{-- FOOTER --}}
<footer class="border-t border-white/5 py-8">
  <div class="max-w-6xl mx-auto px-6 flex flex-col md:flex-row items-center justify-between gap-4">
    <p class="font-mono text-xs text-slate-600">© {{ date('Y') }} <span class="text-cyan-500">Akbar Maulana</span> — All rights reserved.</p>
    <p class="font-mono text-xs text-slate-700">Built with <span class="text-red-500">♥</span> using <span class="text-cyan-500">Laravel</span> + <span class="text-emerald-500">Tailwind</span></p>
    <div class="flex items-center gap-2">
      <div class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></div>
      <span class="font-mono text-xs text-slate-600">System Online</span>
    </div>
  </div>
</footer>

<script>
// Typing animation
const lines = ['> System_Ready: Securing the Web...','> Building the Future, One Commit at a Time.','> Bug found? Consider it fixed. 🔐'];
let li = 0, ci = 0, el = document.getElementById('typing-text');
function type() {
  if (!el) return;
  if (ci < lines[li].length) { el.textContent += lines[li][ci++]; setTimeout(type, 55); }
  else { setTimeout(() => { el.textContent = ''; ci = 0; li = (li+1)%lines.length; type(); }, 2200); }
}
type();

// Scroll reveal
const observer = new IntersectionObserver((entries) => {
  entries.forEach(e => { if (e.isIntersecting) e.target.classList.add('visible'); });
}, { threshold: 0.12 });
document.querySelectorAll('.reveal,.reveal-left,.reveal-right').forEach(el => observer.observe(el));

// Progress bars
const barObserver = new IntersectionObserver((entries) => {
  entries.forEach(e => {
    if (e.isIntersecting) {
      e.target.querySelectorAll('.progress-fill').forEach(bar => {
        bar.style.width = bar.dataset.width + '%';
      });
    }
  });
}, { threshold: 0.3 });
document.querySelectorAll('.card').forEach(c => barObserver.observe(c));

// Navbar shrink
window.addEventListener('scroll', () => {
  document.getElementById('navbar').classList.toggle('py-2', window.scrollY > 50);
});
</script>
</body>
</html>
