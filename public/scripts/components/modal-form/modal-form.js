import { ElementBuilder } from '../../utils/ElementBuilder.js';

const link = ElementBuilder.createElement('link', '', {
	rel: 'stylesheet',
	href: '../scripts/components/modal-form/modal-form.css',
});

async function getCurrentUserFavoriteContent() {
	try {
		const response = await fetch('/user/favorites');
		const data = await response.json();
		return data;
	} catch (error) {
		console.error(error);
	}
}

const { FAVORITE_ALBUMS, FAVORITE_TRACKS } =
	await getCurrentUserFavoriteContent();

document.head.appendChild(link);

function applyModalListeners(articles) {
	articles.forEach((article) => {
		const more_container = ElementBuilder.createElement('section', '', {
			class: 'more-container',
		});
		const more_button = ElementBuilder.createElement('button', ``, {
			class: 'more-button',
		});
		more_button.innerHTML = `
			<i class="ph-fill ph-dots-three-outline icon more-icon"></i>
			<span class="visually-hidden">Ver más opciones sobre esta canción</span>
		`;

		more_container.appendChild(more_button);

		const buttons_container = ElementBuilder.createElement('section', '', {
			class: 'hidden buttons-container',
		});

		const view_song = ElementBuilder.createElement('a', '', {
			href: `/content?id=${article.getAttribute('id')}&type=${
				article.dataset.type
			}`,
		});
		view_song.innerHTML = `
			<i class="ph-fill ph-music-notes icon song-icon"></i>
			<span class="visually-hidden">Crear una publicación sobre esta canción</span>
		`;

		const create_post = ElementBuilder.createElement('button', '', {
			class: 'post-form-opener',
		});
		create_post.innerHTML = `
			<i class="ph-bold ph-note-pencil icon post-icon"></i>
			<span class="visually-hidden">Ver información de la canción</span>	
		`;

		let favorite = ElementBuilder.createElement('button', '', {
			class: 'toggle-favorite-content',
			'data-content': article.getAttribute('id'),
			'data-type': article.dataset.type,
			'data-username': article.dataset.username,
		});

		favorite.innerHTML = `
			<i class="ph ph-heart icon-lg heart-icon"></i>
			<span class="visually-hidden">Agregar o remover contenido como favorito</span>
		`;

		if (
			(FAVORITE_ALBUMS.length >= 3 && article.dataset.type === 'album') ||
			(FAVORITE_TRACKS.length >= 3 && article.dataset.type === 'track')
		) {
			if (
				!FAVORITE_TRACKS.filter(
					(favorite) =>
						favorite.fields['CONTENT_ID'] ===
						article.getAttribute('id')
				).length > 0 &&
				!FAVORITE_ALBUMS.filter(
					(favorite) =>
						favorite.fields['CONTENT_ID'] ===
						article.getAttribute('id')
				).length > 0
			) {
				favorite.classList.add('favorite-disabled');
				favorite.innerHTML = `
					<i class="ph ph-heart icon-lg heart-icon favorite-disabled"></i>
					<span class="visually-hidden">Agregar o remover contenido como favorito</span>
				`;
				favorite.disabled = true;
			}
		}

		buttons_container.appendChild(view_song);
		buttons_container.appendChild(create_post);
		buttons_container.appendChild(favorite);

		const img = article.querySelector('.article-img-container');
		img.appendChild(more_container);
		img.appendChild(buttons_container);
		hoverImgAction(img, buttons_container);
		clickImgAction(buttons_container, more_button);
	});
}

const articles = document.querySelectorAll('.add-modal-access');
applyModalListeners(articles);

function clickImgAction(buttons_container, more_button) {
	more_button.addEventListener('click', () => {
		if (window.innerWidth < 1000) {
			buttons_container.classList.contains('hidden')
				? buttons_container.classList.remove('hidden')
				: buttons_container.classList.add('hidden');
		}
	});
}

function hoverImgAction(img, buttons_container) {
	img.addEventListener('mouseenter', () => {
		if (window.innerWidth >= 1000) {
			buttons_container.classList.remove('hidden');
		}
	});
	img.addEventListener('mouseleave', () => {
		if (window.innerWidth >= 1000) {
			buttons_container.classList.add('hidden');
		}
	});
}

function createModal(data) {
	const modal = ElementBuilder.createElement('section', '', {
		class: 'modal',
	});

	document.addEventListener('click', (e) => {
		e.target === modal && close_modal(modal);
	});

	document.addEventListener('keyup', (e) => {
		e.key === 'Escape' && close_modal(modal);
	});

	const modal_content = ElementBuilder.createElement('section', '', {
		class: 'modal-content',
	});

	const close_button = ElementBuilder.createElement('button', '', {
		class: 'close-button',
	});

	close_button.innerHTML = '<i class="ph-bold ph-x icon close-icon"></i>';
	close_button.addEventListener('click', () => {
		close_modal(modal);
	});
	modal_content.appendChild(close_button);

	const main_image = ElementBuilder.createElement('img', '', {
		src: data.images[1].url,
		alt: `Portada del álbum '${data.album_name}' de ${data.artist_name}`,
		width: '200px',
		height: '200px',
		class: 'image-border',
	});

	const type = ElementBuilder.createElement(
		'p',
		`${data.type === 'album' ? 'Album' : 'Canción'}`,
		{
			class: 'type-title',
		}
	);

	const title = ElementBuilder.createElement(
		'h2',
		`${data.type === 'album' ? data.album_name : data.track_name}`,
		{
			class: 'song-title title',
		}
	);

	const figcaption = ElementBuilder.createElement('figcaption', '', {});

	figcaption.appendChild(type);
	figcaption.appendChild(title);

	const img = ElementBuilder.createElement('img', '', {
		src: data.artist_avatar_url,
		alt: `Imagen de perfil de '${data.artist_name}'`,
		height: '50px',
		width: '50px',
	});
	const artist_span_name = ElementBuilder.createElement(
		'span',
		`${data.artist_name}`,
		{}
	);

	const artist_info = ElementBuilder.createElement('p', '', {
		class: 'artist-info',
	});

	artist_info.appendChild(img);
	artist_info.appendChild(artist_span_name);

	const figure = ElementBuilder.createElement('figure', '', {});

	figure.appendChild(main_image);
	figure.appendChild(figcaption);
	figure.appendChild(artist_info);

	const textarea = ElementBuilder.createElement('textarea', '', {
		placeholder: 'Agrega una descripción...',
		name: 'DESCRIPTION',
		id: 'description',
		cols: '40',
		rows: '10',
		class: 'input',
		maxlength: 255,
		required: true,
	});

	let tag_text = '';
	let tags_count = 0;

	const input_tag = ElementBuilder.createElement('input', '', {
		class: 'input input-tag',
		type: 'text',
		// name: 'tag',
		maxLength: '20',
	});

	input_tag.addEventListener('input', (event) => {
		tag_text = event.target.value;
	});

	input_tag.addEventListener('keydown', (event) => {
		if (event.key === 'Enter') {
			createNewTag();
			event.preventDefault();
		}
	});

	const tags = ElementBuilder.createElement('section', '', {
		class: 'tags',
	});

	const tag_button = ElementBuilder.createElement('button', '+ Agregar tag', {
		type: 'button',
		class: 'add-tag-button submit-button',
	});

	const error_message = ElementBuilder.createElement('p', '', {
		class: 'error-message',
	});

	let tags_list = [];

	function createNewTag() {
		if (tag_text !== '') {
			if (tags_count < 3) {
				tags_list.push(tag_text.toLowerCase());
				const tag = ElementBuilder.createElement(
					'span',
					tag_text.toLowerCase(),
					{
						class: 'tag',
					}
				);
				const remove_tag_button = ElementBuilder.createElement(
					'button',
					'',
					{
						class: 'remove-tag-button',
					}
				);
				remove_tag_button.innerHTML =
					"<i class='ph ph-x close-icon'></i>";
				remove_tag_button.addEventListener('click', () => {
					remove_tag(tag);
				});
				tag.appendChild(remove_tag_button);
				add_tag(tag);
			} else {
				view_error_message('No es posible agregar más de 3 etiquetas.');
			}
		}
	}

	tag_button.addEventListener('click', () => {
		createNewTag();
	});

	function add_tag(tag) {
		tags.appendChild(tag);
		tag_text = '';
		input_tag.value = '';
		tags_count += 1;
	}

	function remove_tag(tag) {
		tags_list = tags_list.filter((t) => t !== tag.textContent.trim());
		tags.removeChild(tag);
		tags_count -= 1;
	}

	const tag_section = ElementBuilder.createElement('section', '', {
		class: 'tags-section',
	});

	tag_section.appendChild(tags);
	tag_section.appendChild(input_tag);
	tag_section.appendChild(tag_button);

	function view_error_message(text) {
		error_message.innerText = text;
		tag_section.appendChild(error_message);
		setTimeout(function () {
			error_message.remove();
		}, 2000);
	}

	const valoración_label = ElementBuilder.createElement(
		'label',
		'Valoración',
		{
			for: 'rate',
		}
	);
	const stars = ElementBuilder.createElement('section', '', {});

	let starsList = [];
	let score_rating = 0;
	for (let i = 0; i < 5; i++) {
		const star = ElementBuilder.createElement('button', '', {
			class: 'rating-star unfilled-star',
			type: 'button',
		});
		starsList.push(star);
		star.addEventListener('mouseover', () => {
			for (let j = 0; j <= i; j++) {
				starsList[j].classList.remove('unfilled-star');
				starsList[j].classList.add('hover-filled-star');
			}
		});
		star.addEventListener('mouseout', () => {
			for (let j = 0; j <= i; j++) {
				starsList[j].classList.remove('hover-filled-star');
				starsList[j].classList.add('unfilled-star');
			}
		});
		star.addEventListener('click', () => {
			starsList.forEach((s) => {
				s.classList.remove('hover-filled-star');
				s.classList.remove('filled-star');
				s.classList.add('unfilled-star');
			});
			if (i + 1 !== score_rating) {
				for (let j = 0; j <= i; j++) {
					starsList[j].classList.add('filled-star');
				}
				score_rating = i + 1;
			} else {
				score_rating = 0;
			}
			rating_value.innerText = score_rating + ' estrellas';
			input_rate.value = score_rating;
		});
		stars.appendChild(star);
	}

	const rating_value = ElementBuilder.createElement('p', '0 estrellas', {
		class: 'rating_value',
	});

	const input_rate = ElementBuilder.createElement('input', '', {
		type: 'number',
		class: 'hidden',
		value: score_rating,
		name: 'RATING',
		id: 'rate',
		required: true,
		min: '1',
	});

	const rating = ElementBuilder.createElement('p', '', {
		class: 'rating',
	});

	rating.appendChild(valoración_label);
	rating.appendChild(stars);
	rating.appendChild(rating_value);
	rating.appendChild(input_rate);

	const back_button = ElementBuilder.createElement('button', 'Cancelar', {
		class: 'cancel-button',
	});
	back_button.addEventListener('click', () => {
		close_modal(modal);
	});

	const postear_button = ElementBuilder.createElement('input', '', {
		type: 'submit',
		value: 'Crear post',
		class: 'submit-button postear-button',
	});

	postear_button.addEventListener('click', (event) => {
		event.preventDefault();

		if (textarea.value.length > 0) {
			const formData = new FormData(form);
			const values = {};
			formData.forEach((value, key) => {
				values[key] = value;
			});

			values['CONTENT_ID'] =
				data.type === 'album' ? data.album_id : data.track_id;

			values['RATING'] = score_rating;
			values['TAGS'] = tags_list;

			if (score_rating === 0) {
				view_error_message(
					'No es posible postear una canción con 0 estrellas.'
				);
			} else {
				fetch('/post/create', {
					method: 'POST',
					headers: {
						'Content-Type': 'application/json',
					},
					body: JSON.stringify(values),
				})
					.then((response) => response.json())
					.then((data) => {
						close_modal(modal);
						window.location.href = '/';
					})
					.catch((error) => {
						console.error('Error:', error);
					});
			}
		} else {
			view_error_message('No es posible postear una cancion sin texto.');
		}
	});

	const submit_container = ElementBuilder.createElement('section', '', {
		class: 'submit-container',
	});

	submit_container.appendChild(back_button);
	submit_container.appendChild(postear_button);

	const form = ElementBuilder.createElement('form', '', {
		action: '',
		method: 'GET',
	});

	form.appendChild(textarea);
	form.appendChild(tag_section);
	form.appendChild(rating);
	form.appendChild(submit_container);

	modal_content.appendChild(figure);
	modal_content.appendChild(form);
	modal.appendChild(modal_content);

	modal.addEventListener('keydown', function (event) {
		var modalContent = document.querySelector('.modal-content');
		var modalElements = modalContent.querySelectorAll(
			'button, input, select, textarea, a[href]'
		);
		var firstElement = modalElements[0];
		var lastElement = modalElements[modalElements.length - 1];

		if (event.key === 'Tab') {
			if (event.shiftKey) {
				if (document.activeElement === firstElement) {
					lastElement.focus();
					event.preventDefault();
				}
			} else {
				if (document.activeElement === lastElement) {
					firstElement.focus();
					event.preventDefault();
				}
			}
		}
	});

	document.body.appendChild(modal);
	textarea.focus();
}

const main_header = document.getElementById('main-header');
const html = document.querySelector('html');

function applyPostFormListeners(post_form_openers, create_post) {
	post_form_openers.forEach((opener) => {
		opener.addEventListener('click', () => {
			create_post !== null && create_post.classList.add('hidden');
			// go_to_top.classList.add("hidden");
			html.classList.add('none-scroll');
			main_header.classList.add('hidden');

			const article = opener.closest('article');

			let content_type = '';
			let content_id = '';

			if (article) {
				content_id = article.getAttribute('id');
				content_type = article.dataset.type;
			} else {
				const create_post_button = document.querySelector(
					'.submit-button.post-form-opener'
				);

				content_id = create_post_button.getAttribute('id');
				content_type = create_post_button.dataset.type;
			}

			fetch(`/content/data?id=${content_id}&type=${content_type}`, {
				method: 'GET',
				headers: {
					'Content-Type': 'application/json',
				},
			})
				.then((response) => response.json())
				.then((data) => {
					createModal(data);
				})
				.catch((error) => {
					console.error(error);
				});
		});
	});
}
const post_form_openers = document.querySelectorAll('.post-form-opener');
const create_post = document.getElementById('create-post');
applyPostFormListeners(post_form_openers, create_post);

function close_modal(modal) {
	modal.remove();
	main_header.classList.remove('hidden');
	html.classList.remove('none-scroll');
}

window.applyModalListeners = applyModalListeners;
window.applyPostFormListeners = applyPostFormListeners;
