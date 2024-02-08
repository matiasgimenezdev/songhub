import { ElementBuilder } from "../../utils/ElementBuilder.js";

function create_modal() {

  const modal = ElementBuilder.createElement('section', '', {
    class: "modal",
  })

  const modal_content = ElementBuilder.createElement('section', '', {
    class: "modal-content"
  })

  const close_button = ElementBuilder.createElement('button', '', { class: "close-button" });
  modal_content.appendChild(close_button);

  const main_image = ElementBuilder.createElement('img', '', {
    src: "https://i.pinimg.com/564x/2f/18/9e/2f189e3be4ef04ab12a0a125efe4e67e.jpg",
    alt: "Portada del álbum 'The Dark Side of the Moon' de Pink Floyd",
    width: "200px",
    height: "200px",
    class: "image-border"
  })

  const type = ElementBuilder.createElement('p', 'Canción', { class: "type-title" })
  const title = ElementBuilder.createElement('h2', 'Comfortubly Numb', { class: "song-title" })

  const figcaption = ElementBuilder.createElement('figcaption', '', {})

  figcaption.appendChild(type);
  figcaption.appendChild(title);



  const img = ElementBuilder.createElement('img', '', {
    src: "https://i.pinimg.com/236x/20/cc/b2/20ccb24df9750b08d764e574fcec5f5d.jpg",
    alt: "Imagen de perfil de 'Pink Floyd'",
    height: "50px",
    width: "50px",
  })
  const artist_span_name = ElementBuilder.createElement('span', 'Pink Floyd · 1973', {})

  const artist_info = ElementBuilder.createElement('p', '', {
    class: 'artist-info'
  })

  artist_info.appendChild(img);
  artist_info.appendChild(artist_span_name);


  const figure = ElementBuilder.createElement('figure', '', {})

  figure.appendChild(main_image);
  figure.appendChild(figcaption);
  figure.appendChild(artist_info);


  const textarea = ElementBuilder.createElement('textarea', '', {
    placeholder: "Agrega una descripción...",
    name: "description",
    id: "description",
    cols: "40",
    rows: "10",
    class: "input"
  })

  const input_tag = ElementBuilder.createElement('input', '+ Add tag', {
    class: "input",
    type: "text",
    name: "tag",
    placeholder: "ej. Trap"
  })

  const tag_button = ElementBuilder.createElement('button', '', {
    class: "tag-button submit-button"
  })

  const actions = ElementBuilder.createElement('p', '', {})

  actions.appendChild(input_tag);
  actions.appendChild(tag_button);


  const valoración_label = ElementBuilder.createElement('label', 'Valoración', {
    for: "rate"
  })
  const stars = ElementBuilder.createElement('span', '★★★★★', {})
  const input_rate = ElementBuilder.createElement('input', '', {
    type: "hidden",
    value: "3",
    name: "rate",
    id: "rate"
  })
  const rating = ElementBuilder.createElement('p', '', {
    class: "rating"
  })

  rating.appendChild(valoración_label);
  rating.appendChild(stars);
  rating.appendChild(input_rate);

  const share_span = ElementBuilder.createElement('span', 'share', {
    class: "material-symbols-outlined"
  })
  const share_button = ElementBuilder.createElement('button', '', {
    class: 'share-button'
  })
  share_button.appendChild(share_span)
  const share_container = ElementBuilder.createElement('p', '', {
    class: "share"
  })

  share_container.appendChild(share_button);

  const submit_input = ElementBuilder.createElement('input', '', {
    type: "sybmit",
    value: "Realizar post",
    class: "submit-button"
  })


  const form = ElementBuilder.createElement('form', '', {
    action: "",
    method: "GET"
  })

  form.appendChild(textarea);
  form.appendChild(actions);
  form.appendChild(rating);
  form.appendChild(share_container);
  form.appendChild(submit_input);

  modal_content.appendChild(figure);
  modal_content.appendChild(form);
  modal.appendChild(modal_content);

  document.body.appendChild(modal);

}

const post_form_openers = document.querySelectorAll(".post-form-opener")


const create_post = document.getElementById("create-post");
const go_to_top = document.getElementById("go-to-top");
const main_header = document.getElementById("main-header");

post_form_openers.forEach((opener) => {
  opener.addEventListener('click', () => {
    create_post.classList.add("hidden");
    go_to_top.classList.add("hidden");
    main_header.classList.add("hidden");
    create_modal();
  })
});