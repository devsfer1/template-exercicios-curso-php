<div class="title">Tipo Boolean</div>

<?php
echo TRUE;
echo '<br>';
echo FALSE;

echo '<br>' . var_dump(true);
echo '<br>' . var_dump(False);
echo '<br>' . var_dump('false');
echo '<br>' .is_bool(false);
echo '<br>' . is_bool('false');

// fazer as regras de conversões
echo '<p>Regras:</p>';
echo '<br>' . var_dump((bool) 4);
echo '<br>' . var_dump((bool) 20);
echo '<br>' . var_dump((bool) -1);
echo '<br>' . var_dump((bool) "");
echo '<br>' . var_dump((bool) "0");
echo '<br>' . var_dump((bool) " ");
echo '<br>' . var_dump((bool) "00");

echo '<br>' . var_dump(!!"false");