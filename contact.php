<?php $page = basename(__FILE__); ?>
<?php include __DIR__ . "/partials/header.php"; ?>
<main class="section">
  <div class="container">
    <div class="bigcopy" style="max-width: 22ch;">Start with the technical problem.</div>
    <div class="subcopy">We respond faster when scope is structured.</div>

    <div class="grid" style="margin-top:34px;">
      <div class="col-6">
        <form action="https://formspree.io/f/xzdzzadj" method="POST">
            <input type="text" name="_gotcha" style="display:none">
            <input type="hidden" name="_subject" value="Mate-World Website Enquiry">
            <input type="hidden" name="_next" value="thank-you.php">
          <div class="field">
            <label for="project_type">Project type</label>
            <select id="project_type" name="project_type" required>
              <option value="">Select…</option>
              <option>Mining / Industrial</option>
              <option>Government / Institutional</option>
              <option>Commercial</option>
              <option>Renewable Energy / Solar</option>
              <option>Other</option>
            </select>
          </div>

          <div class="field">
            <label for="location">Location</label>
            <input id="location" name="location" placeholder="Town / site location" required />
          </div>

          <div class="field">
            <label>Technical services required</label>
            <div class="checkgrid">
              <div class="check"><input type="checkbox" name="services" value="Surveying & GIS"/><div><strong>Surveying & GIS</strong><div style="color:rgba(14,18,23,.72); font-size:.95rem;">Site intelligence and setting out</div></div></div>
              <div class="check"><input type="checkbox" name="services" value="Civil Works"/><div><strong>Civil Works</strong><div style="color:rgba(14,18,23,.72); font-size:.95rem;">Earthworks, concrete, structural</div></div></div>
              <div class="check"><input type="checkbox" name="services" value="Electrical (NCC E)"/><div><strong>Electrical (NCC E)</strong><div style="color:rgba(14,18,23,.72); font-size:.95rem;">Installation and integration</div></div></div>
              <div class="check"><input type="checkbox" name="services" value="Customs Clearing & Logistics"/><div><strong>Customs & Logistics</strong><div style="color:rgba(14,18,23,.72); font-size:.95rem;">Import clearance and forwarding</div></div></div>
            </div>
          </div>

          <div class="field">
            <label for="timeline">Timeline</label>
            <input id="timeline" name="timeline" placeholder="e.g., Q1 2026 / 8 weeks / urgent" />
          </div>

          <div class="field">
            <label for="message">Project note</label>
            <textarea id="message" name="message" placeholder="Scope, constraints, drawings available, compliance requirements" required></textarea>
          </div>

          <div class="hr" style="margin:18px 0;"></div>

          <div class="field"><label for="name">Name</label><input id="name" name="name" placeholder="Your name" required /></div>
          <div class="field"><label for="email">Email</label><input id="email" type="email" name="email" placeholder="you@company.com" required /></div>
          <div class="field"><label for="phone">Phone</label><input id="phone" name="phone" placeholder="+260…" /></div>

          <button class="btn primary" type="submit">Send for review</button>
          <p style="margin:10px 0 0; color:rgba(14,18,23,.68); line-height:1.6;">This form opens your email client to send to info@mateworldcontractors.com.</p>
        </form>
      </div>

      <div class="col-6">
        <div class="stack">
          <h2 style="margin:0 0 10px;">HQ</h2>
          <p style="margin:0; color:rgba(14,18,23,.78); line-height:1.75;">Mpelembe House, Ndola<br/>Copperbelt Focus</p>
          <div class="hr" style="margin:14px 0;"></div>
          <p style="margin:0; color:rgba(14,18,23,.78); line-height:1.75;">+260 955 869 020<br/>+260 968 869 020<br/>info@mateworldcontractors.com</p>
          <div class="hr" style="margin:14px 0;"></div>
          <code>
R. Eng. O (EngRB) • Class C3 (2025)<br/>
NCC Category E • In-house GIS<br/>
Licensed Clearing & Forwarding
          </code>
        </div>
        <div class="map" style="margin-top:22px;">
          <div class="img"></div>
          <div class="legend">Add Google Map embed in production.</div>
        </div>
      </div>
    </div>
  </div>
</main>
<?php include __DIR__ . "/partials/footer.php"; ?>
