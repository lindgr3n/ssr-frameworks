import { error } from '@sveltejs/kit';
import data from '../../../data.json';

/** @type {import('./$types').PageServerLoad} */
export async function load({ params }) {
	async function getProducts() {
		return new Promise((resolve) => {
			setTimeout(() => {
				resolve(data.products);
			}, 1000);
		});
	}
	const products = await getProducts();

	if (products) {
		return { products };
	}

	throw error(404, 'Not found');
}
