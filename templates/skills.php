<?php
$data = file_get_contents('./assets/skills.json');
$skills = json_decode($data, true);

function toSlug(string $stackIcon): string {
    $stackIcon = strtolower($stackIcon);
    $stackIcon = preg_replace('/[^a-z0-9-]/', '', $stackIcon);
    $stackIcon = preg_replace('/-+/', '', $stackIcon);
    return $stackIcon;
}
?>

<BaseLayout>
  <section class="grid place-items-center w-full mx-auto 2xl:max-w-7xl justify-center py-24 relative p-12">
    <div class="prose text-gray-500 prose-sm prose-headings:font-normal prose-headings:text-xl w-full">
      <div>
        <h1 class="text-4xl">Mes compétences</h1>
      </div>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8 mt-8 pt-8">
      <?php foreach ($skills as $index => $item): ?>
        <div class="relative bg-white rounded-2xl shadow-xl overflow-hidden transform transition-all duration-500 ease-in-out hover:scale-105 hover:shadow-2xl">
          <figure class="relative">
            <img
              class="w-full h-60 object-cover transition-transform duration-500 ease-in-out"
              src="<?= $item['bgImage'] ?? 'https://via.placeholder.com/500x300?text=Skill' ?>"
              alt="<?= $item['title'] ?>"
            />
            <div class="absolute inset-0 bg-gradient-to-b from-gray-900/25 to-gray-900/5"></div>
            <h3 class="z-10 text-2xl font-medium text-white absolute top-4 left-4"><?= $item['title'] ?></h3>
          </figure>

          <div class="p-6">
            <p class="text-gray-700"><?= $item['description'] ?></p>

            <ul class="mt-4 flex gap-4">
              <?php foreach ($item['stack'] as $icon): ?>
                <li class="h-12 w-12">
                  <img
                    src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/<?= toSlug($icon) ?>/<?= toSlug($icon) ?>-original.svg"
                    alt="Logo <?= $icon ?>"
                    class="h-full w-full object-contain rounded-full"
                  />
                </li>
              <?php endforeach; ?>
            </ul>

            <div class="mt-4">
              <a href="<?= $item['link'] ?>" target="_blank" class="text-orange-400 underline">
                Voir plus
              </a>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </section>
</BaseLayout>

