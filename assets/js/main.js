
(function () {
  const burger = document.querySelector('[data-burger]');
  const panel = document.querySelector('[data-mobilepanel]');
  if (burger && panel) {
    burger.addEventListener('click', () => {
      const open = panel.style.display === 'block';
      panel.style.display = open ? 'none' : 'block';
      burger.setAttribute('aria-expanded', open ? 'false' : 'true');
    });
  }

  const path = window.location.pathname.split('/').pop() || 'index.html';
  document.querySelectorAll('a[data-nav]').forEach(a => {
    if (a.getAttribute('href') === path) a.classList.add('active');
  });

  const reveal = document.querySelector('[data-reveal]');
  if (reveal) {
    const onScroll = () => {
      const y = window.scrollY || document.documentElement.scrollTop;
      const trigger = window.innerHeight * 0.10;
      if (y > trigger) reveal.classList.add('is-visible');
      else reveal.classList.remove('is-visible');
    };
    window.addEventListener('scroll', onScroll, {passive:true});
    onScroll();
  }

  const form = document.querySelector('[data-contactform]');
  if (form) {
    form.addEventListener('submit', (e) => {
      e.preventDefault();
      const get = (name) => (form.querySelector(`[name="${name}"]`)?.value || '').trim();
      const checks = Array.from(form.querySelectorAll('input[name="services"]:checked')).map(x => x.value);
      const subject = encodeURIComponent('Technical Review Request - Mate-World Contractors');
      const body = encodeURIComponent(
`Project Type: ${get('project_type')}
Location: ${get('location')}
Services Required: ${checks.join(', ') || 'N/A'}
Timeline: ${get('timeline')}

Name: ${get('name')}
Email: ${get('email')}
Phone: ${get('phone')}

Message:
${get('message')}`
      );
      window.location.href = `mailto:info@mateworldcontractors.com?subject=${subject}&body=${body}`;
    });
  }
})();
