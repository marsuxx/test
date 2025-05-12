        <div class="message"><?= htmlspecialchars($message) ?></div>
    <?php endif; ?>
    <h2>Nos voyages disponibles</h2>
    <table>
        <thead>
            <tr>
                <th>Destination</th>
                <th>Date de départ</th>
                <th>Durée (jours)</th>
                <th>Prix (€)</th>
                <th>Places disponibles</th>
                <th>Réserver</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($voyages as $index => $v): ?>
            <tr>
                <td><?= htmlspecialchars($v->getDestination()) ?></td>
                <td><?= htmlspecialchars($v->getDateDepart()) ?></td>
                <td><?= htmlspecialchars($v->getDuree()) ?></td>
                <td><?= number_format($v->getPrix(), 2, ',', ' ') ?></td>
                <td><?= htmlspecialchars($v->getPlacesDisponibles()) ?></td>
                <td>
                    <?php if ($v->getPlacesDisponibles() > 0): ?>
                    <form method="post" style="margin:0;">
                        <input type="hidden" name="voyage_index" value="<?= $index ?>" />
                        <label for="places_<?= $index ?>">Places:</label>
                        <input type="number" id="places_<?= $index ?>" name="places" min="1" max="<?= $v->getPlacesDisponibles() ?>" value="1" required />
                        <input type="submit" name="reserver" value="Réserver" />
                    </form>
                    <?php else: ?>
                        Complet
                    <?php endif; ?>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
