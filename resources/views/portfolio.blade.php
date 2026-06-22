<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Akbar Maulana - Information System Security Enthusiast & Full-Stack Web Developer.">
<title>Akbar Maulana | Cyber Portfolio</title>
<meta name="csrf-token" content="{{ csrf_token() }}">
@viteReactRefresh
@vite(['resources/css/app.css','resources/js/app.js','resources/js/app.jsx'])
<script src="https://www.google.com/recaptcha/api.js?render={{ env('RECAPTCHA_SITE_KEY') }}"></script>
<style>
  .section-min { min-height: 100vh; }
  .hero-section { min-height: 100vh; display:flex; align-items:center; overflow:hidden; position:relative; }
  .orb-bg { position:absolute; inset:0; z-index:0; pointer-events:none; }
  .hero-content { position:relative; z-index:10; width:100%; }
  .skill-bar-wrap { background:rgba(255,255,255,0.06); border-radius:999px; height:6px; overflow:hidden; }
  .skill-bar-fill { height:6px; border-radius:999px; width:0; transition:width 1.2s cubic-bezier(.4,0,.2,1); }
  .project-card { background:#0d1117; border:1px solid rgba(255,255,255,0.08); border-radius:16px; transition:all .25s; }
  .project-card:hover { border-color:rgba(0,212,255,0.3); transform:translateY(-4px); box-shadow:0 12px 40px rgba(0,212,255,0.08); }
  .nav-link { color:#94a3b8; font-size:.875rem; transition:color .2s; }
  .nav-link:hover { color:#00d4ff; }
</style>
</head>
<body class="bg-[#030712] text-slate-200" style="font-family:'Instrument Sans',sans-serif">

{{-- NAVBAR --}}
<nav id="navbar" class="fixed top-0 w-full z-50 navbar-glass transition-all duration-300">
  <div class="max-w-6xl mx-auto px-6 py-4 flex items-center justify-between">
    <a href="#hero" class="font-mono text-base font-bold neon-text tracking-wider">&lt;AKBAR /&gt;</a>
    <div class="hidden md:flex items-center gap-8">
      @foreach(['About'=>'#about','Skills'=>'#skills','Projects'=>'#projects','Contact'=>'#contact'] as $label=>$href)
      <a href="{{ $href }}" class="nav-link">{{ $label }}</a>
      @endforeach
    </div>
    <a href="#contact" class="btn-glow text-xs px-4 py-2">Hire Me</a>
  </div>
</nav>

{{-- ============= HERO ============= --}}
<section id="hero" class="hero-section">
  <div id="orb-root" class="orb-bg"></div>
  <div class="hero-content max-w-6xl mx-auto px-6 pt-24 pb-16">
    <div class="grid lg:grid-cols-2 gap-12 items-center">
      {{-- LEFT --}}
      <div>
        <p class="font-mono text-xs text-cyan-400 tracking-[0.25em] mb-5 opacity-80">// WELCOME TO MY DIGITAL DOMAIN</p>
        <h1 class="text-5xl md:text-7xl font-black mb-5 leading-tight">
          <span class="gradient-text">Akbar</span> <span class="text-white">Maulana</span>
        </h1>
        <p class="text-lg md:text-xl text-slate-400 mb-8 leading-relaxed max-w-xl">
          Information System Security Enthusiast &amp; Full-Stack Web Developer
        </p>
        <div class="terminal max-w-lg mb-10 text-left">
          <div class="terminal-header">
            <div class="terminal-dot bg-red-500"></div>
            <div class="terminal-dot bg-yellow-500"></div>
            <div class="terminal-dot bg-green-500"></div>
            <span class="ml-3 text-xs text-slate-500 font-mono">akbar@cyberdev ~ $</span>
          </div>
          <div class="p-4 space-y-1.5 text-xs font-mono">
            <p class="text-slate-500">$ whoami</p>
            <p class="text-green-400">akbar_maulana</p>
            <p class="text-slate-500 mt-2">$ cat mission.txt</p>
            <p class="text-cyan-400" id="typing-text"></p>
          </div>
        </div>
        <div class="flex flex-wrap gap-4">
          <a href="#projects" class="btn-glow">View Projects</a>
          <a href="#contact" class="btn-glow" style="border-color:rgba(0,255,136,0.4);color:#00ff88">Get In Touch</a>
        </div>
      </div>
      {{-- RIGHT: CardSwap gallery --}}
      <div class="hidden lg:flex items-center justify-center w-full" style="height:320px;">
        <div id="card-swap-root"
             style="position:relative;width:280px;height:220px;"
             data-cards='{{ $heroCards->map(fn($c)=>["title"=>$c->title,"subtitle"=>$c->subtitle,"accent_color"=>$c->accent_color,"bg_color"=>$c->bg_color])->values()->toJson(JSON_HEX_APOS) }}'>
        </div>
      </div>
    </div>
  </div>
  <div class="absolute bottom-8 left-1/2 -translate-x-1/2 animate-bounce z-10">
    <svg class="w-5 h-5 text-cyan-500 opacity-50" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
  </div>
</section>

<div class="section-divider"></div>

{{-- ============= ABOUT ============= --}}
<section id="about" class="py-28 bg-[#030712]">
  <div class="max-w-6xl mx-auto px-6">
    <div class="section-tag reveal">about_me.exe</div>
    <div class="grid md:grid-cols-2 gap-16 items-center mt-4">

      <div class="reveal-left">
        <h2 class="text-4xl font-bold mb-6">About <span class="gradient-text">Me</span></h2>
        <p class="text-slate-400 leading-relaxed mb-4">
          Halo! Saya <strong class="text-white">Akbar Maulana</strong>, mahasiswa
          <strong class="text-cyan-400">Keamanan Sistem Informasi</strong> di Politeknik Negeri Bengkalis.
        </p>
        <p class="text-slate-400 leading-relaxed mb-4">
          Saya memiliki passion mendalam di bidang
          <span class="text-emerald-400 font-semibold">manual penetration testing</span>,
          <span class="text-emerald-400 font-semibold">bug bounty hunting</span>,
          dan membangun aplikasi web yang aman dari ancaman siber.
        </p>
        <p class="text-slate-400 leading-relaxed mb-8">
          Motto saya: <em class="text-cyan-300 font-mono">"Securing the Web &amp; Building the Future"</em>
        </p>
      </div>

      <div class="reveal-right flex flex-col items-center justify-start gap-8">
        <div id="profile-card-root"
             style="width:280px;"
             data-name="{{ $settings['hero_name'] ?? 'Akbar Maulana' }}"
             data-tagline="{{ $settings['hero_tagline'] ?? 'Information System Security Enthusiast' }}">
        </div>
        
      </div>
    </div>
    
    @php
      $aboutInfos = [
        ['label' => 'Domisili', 'value' => $settings['about_location'] ?? 'Bengkalis, Riau'],
        ['label' => 'Institusi', 'value' => $settings['about_institution'] ?? 'Poltek Negeri Bengkalis'],
        ['label' => 'Fokus', 'value' => $settings['about_focus'] ?? 'Cybersecurity & Dev'],
        ['label' => 'Status', 'value' => 'Open to Collaborate']
      ];
    @endphp
    <div class="reveal mt-12">
      <div id="about-info-root" class="w-full"
           data-infos="{{ json_encode($aboutInfos) }}">
      </div>
    </div>
  </div>
</section>

<div class="section-divider"></div>

{{-- ============= SKILLS ============= --}}
<section id="skills" class="py-28 bg-[#0a0f1a]">
  <div class="max-w-6xl mx-auto px-6">
    <div class="section-tag reveal">skills_matrix.sh</div>
    <h2 class="text-4xl font-bold mb-3 mt-2 reveal">Tech <span class="gradient-text">Arsenal</span></h2>
    <p class="text-slate-500 mb-14 reveal">Tools &amp; technologies I wield in battle.</p>
    <div id="magic-bento-root" 
         data-skills='{{ $skills->flatten()->map(fn($s)=>[ "title"=>$s->name, "description"=>"Proficiency: ".$s->level."%", "label"=>$s->category, "level"=>$s->level, "color"=>$s->color==="green"?"#0a1a12":($s->color==="purple"?"#140a20":"#0a1220") ])->values()->toJson(JSON_HEX_APOS) }}'>
    </div>
  </div>
</section>

<div class="section-divider"></div>

{{-- ============= PROJECTS ============= --}}
<section id="projects" class="py-28 bg-[#030712]">
  <div class="max-w-6xl mx-auto px-6">
    <div class="section-tag reveal">projects.json</div>
    <h2 class="text-4xl font-bold mb-3 mt-2 reveal">Featured <span class="gradient-text">Projects</span></h2>
    <p class="text-slate-500 mb-14 reveal">Things I've built that I'm proud of.</p>
    <div class="grid md:grid-cols-2 gap-6">
      @forelse($projects as $i => $project)
      <div class="project-card p-6 reveal group" style="transition-delay:{{ ($i % 4) * 0.1 }}s">
        <div class="flex items-start justify-between mb-4">
          <div class="w-12 h-12 rounded-xl flex items-center justify-center text-xl font-bold"
               style="background:{{ $project->accent_color ?? '#00d4ff' }}12;border:1px solid {{ $project->accent_color ?? '#00d4ff' }}25;color:{{ $project->accent_color ?? '#00d4ff' }}">
            {{ strtoupper(substr($project->title,0,1)) }}
          </div>
          @if($project->is_featured)
          <span class="text-xs font-mono px-2 py-0.5 rounded" style="background:rgba(0,212,255,0.08);color:#00d4ff;border:1px solid rgba(0,212,255,0.2)">Featured</span>
          @endif
        </div>
        <h3 class="text-lg font-bold text-white mb-2 group-hover:text-cyan-400 transition-colors">{{ $project->title }}</h3>
        <p class="text-slate-400 text-sm leading-relaxed mb-3">{{ Str::limit($project->description,120) }}</p>
        <p class="text-xs text-slate-600 font-mono mb-4">{{ $project->tech_stack }}</p>
        @if($project->tags)
        <div class="flex flex-wrap gap-1.5 mb-4">
          @foreach($project->tags as $tag)
          <span class="text-xs px-2 py-0.5 rounded font-mono"
                style="background:{{ $project->accent_color ?? '#00d4ff' }}10;color:{{ $project->accent_color ?? '#00d4ff' }};border:1px solid {{ $project->accent_color ?? '#00d4ff' }}25">
            {{ $tag }}
          </span>
          @endforeach
        </div>
        @endif
        <div class="flex gap-3 mt-auto pt-2 border-t border-white/5">
          @if($project->github_url)
          <a href="{{ $project->github_url }}" target="_blank" class="text-xs text-slate-500 hover:text-cyan-400 transition font-mono">GitHub &rarr;</a>
          @endif
          @if($project->live_url)
          <a href="{{ $project->live_url }}" target="_blank" class="text-xs text-slate-500 hover:text-emerald-400 transition font-mono">Live Demo &rarr;</a>
          @endif
        </div>
      </div>
      @empty
      <div class="col-span-2 text-center text-slate-600 font-mono py-12">Belum ada project data.</div>
      @endforelse
    </div>
  </div>
</section>

<div class="section-divider"></div>

{{-- ============= CONTACT ============= --}}
<section id="contact" class="py-28 bg-[#0a0f1a]">
  <div class="max-w-5xl mx-auto px-6">
    <div class="section-tag reveal">contact.sh</div>
    <h2 class="text-4xl font-bold mb-3 mt-2 reveal">Get In <span class="gradient-text">Touch</span></h2>
    <p class="text-slate-500 mb-14 reveal">Punya project atau ingin berkolaborasi? Let's connect!</p>

    @if(session('success'))
    <div class="mb-8 p-4 rounded-xl border border-emerald-500/30 bg-emerald-500/8 text-emerald-400 font-mono text-sm">
      {{ session('success') }}
    </div>
    @endif
    @if(session('error'))
    <div class="mb-8 p-4 rounded-xl border border-red-500/30 bg-red-500/8 text-red-400 font-mono text-sm">
      {{ session('error') }}
    </div>
    @endif

    <div class="grid lg:grid-cols-2 gap-10">
      {{-- FORM --}}
      <div class="reveal-left">
        <form id="contact-form" action="{{ route('contact.store') }}" method="POST" class="space-y-5">
          @csrf
          <input type="hidden" name="g-recaptcha-response" id="g-recaptcha-response">
          <div class="grid grid-cols-2 gap-4">
            <div>
              <label class="block text-xs font-mono text-slate-500 mb-2">Nama</label>
              <input type="text" name="name" value="{{ old('name') }}" placeholder="Nama kamu" class="cyber-input @error('name') border-red-500 @enderror" required>
              @error('name')<p class="text-red-400 text-xs mt-1">{{ $message }}</p>@enderror
            </div>
            <div>
              <label class="block text-xs font-mono text-slate-500 mb-2">Email</label>
              <input type="email" name="email" value="{{ old('email') }}" placeholder="email@kamu.com" class="cyber-input @error('email') border-red-500 @enderror" required>
              @error('email')<p class="text-red-400 text-xs mt-1">{{ $message }}</p>@enderror
            </div>
          </div>
          <div>
            <label class="block text-xs font-mono text-slate-500 mb-2">Subjek</label>
            <input type="text" name="subject" value="{{ old('subject') }}" placeholder="Project / Kolaborasi / dll" class="cyber-input">
          </div>
          <div>
            <label class="block text-xs font-mono text-slate-500 mb-2">Pesan</label>
            <textarea name="message" rows="5" placeholder="Ceritakan project atau ideamu..." class="cyber-input resize-none @error('message') border-red-500 @enderror" required>{{ old('message') }}</textarea>
            @error('message')<p class="text-red-400 text-xs mt-1">{{ $message }}</p>@enderror
          </div>
          <button type="submit" class="btn-glow w-full justify-center py-3">Kirim Pesan</button>
        </form>
      </div>

      {{-- LINKS (BENTO) --}}
      <div id="contact-bento-root" class="reveal-right flex flex-col w-full h-full"
           data-socials="{{ json_encode($socials) }}">
      </div>
    </div>
  </div>
</section>

{{-- FOOTER --}}
<footer class="border-t border-white/5 py-8 bg-[#030712]">
  <div class="max-w-6xl mx-auto px-6 flex flex-col md:flex-row items-center justify-between gap-4">
    <p class="font-mono text-xs text-slate-600">&copy; {{ date('Y') }} <span class="text-cyan-500">Akbar Maulana</span> &mdash; All rights reserved.</p>
    <p class="font-mono text-xs text-slate-700">Built with <span class="text-cyan-500">Laravel</span> + <span class="text-emerald-500">Tailwind</span></p>
    <div class="flex items-center gap-2">
      <div class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></div>
      <span class="font-mono text-xs text-slate-600">System Online</span>
    </div>
  </div>
</footer>

<script>
// Typing animation
const lines = ['> Securing the Web & Building the Future.','> Bug found? Consider it fixed.','> One Commit at a Time.'];
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
}, { threshold: 0.1 });
document.querySelectorAll('.reveal,.reveal-left,.reveal-right').forEach(el => observer.observe(el));

// Progress bars
const barObserver = new IntersectionObserver((entries) => {
  entries.forEach(e => {
    if (e.isIntersecting) {
      e.target.querySelectorAll('.skill-bar-fill').forEach(bar => {
        bar.style.width = bar.dataset.width + '%';
      });
    }
  });
}, { threshold: 0.3 });
document.querySelectorAll('#skills .card').forEach(c => barObserver.observe(c));

// Navbar shrink
window.addEventListener('scroll', () => {
  document.getElementById('navbar').classList.toggle('py-2', window.scrollY > 50);
});

// ReCAPTCHA v3
const form = document.getElementById('contact-form');
if (form) {
  form.addEventListener('submit', function(e) {
    e.preventDefault();
    grecaptcha.ready(function() {
      grecaptcha.execute('{{ env('RECAPTCHA_SITE_KEY') }}', {action:'submit'}).then(function(token) {
        document.getElementById('g-recaptcha-response').value = token;
        form.submit();
      });
    });
  });
}
</script>
</body>
</html>
