<script>
  import { onMount } from 'svelte';
  import data from '../../data.json'
  import Layout from './Layout.svelte';

  let products = [];
  let loading = false;

  async function getItems() {
    return new Promise((resolve) => {
      setTimeout(() => {
        resolve(data.products);
      }, 1000);
    })
  }

  console.log(data);
  onMount(async () => {
    // Fetch data
    loading = true;
    products = await getItems();
    loading = false;
  })
</script>
<Layout>

  <main class="w-full h-full">
    <div class="">
      <div class="mx-auto max-w-2xl py-16 px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">
        <h2 class="sr-only">Products</h2>
        
        {#if loading}
        <!-- content here -->
        {:else}
        <!-- else content here -->
        {/if}
        <div class="grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
          {#each products as product}
          <a href={product.href} class="group">
            <div class="aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-w-7 xl:aspect-h-8">
              <img src={product.imageSrc} alt={product.imageAlt} class="h-full w-full object-cover object-center group-hover:opacity-75" />
            </div>
            <h3 class="mt-4 text-sm text-gray-700">{ product.name }</h3>
            <p class="mt-1 text-lg font-medium text-gray-900">{ product.price }</p>
          </a>
          {/each}
        </div>
      </div>
    </div>
  </main>
</Layout>

<style>
  
</style>
