<div class="config-screen">
  <p class="config-defaults">Modifie les stats ou lance avec les valeurs par défaut</p>
  <form method="POST">
    <div class="config-grid">

      <div class="config-card">
        <div class="config-card-title">⚔ Aldric — Héros</div>
        <div class="config-field">
          <label>POINTS DE VIE</label>
          <input type="number" name="hero_hp" value="30" min="1" max="100">
          <div class="config-hint">1 — 100</div>
        </div>
        <div class="config-field">
          <label>ATTAQUE</label>
          <input type="number" name="hero_atk" value="7" min="1" max="50">
          <div class="config-hint">1 — 50</div>
        </div>
      </div>

      <div class="config-card enemy">
        <div class="config-card-title">💀 Gobelin — Ennemi</div>
        <div class="config-field">
          <label>POINTS DE VIE</label>
          <input type="number" name="enemy_hp" value="20" min="1" max="100">
          <div class="config-hint">1 — 100</div>
        </div>
        <div class="config-field">
          <label>ATTAQUE</label>
          <input type="number" name="enemy_atk" value="5" min="1" max="50">
          <div class="config-hint">1 — 50</div>
        </div>
      </div>

    </div>

    <div class="btn-row">
      <button type="submit" name="lancer" class="btn">⚔ Lancer la bataille</button>
    </div>
  </form>
</div>
