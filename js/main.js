/* @author web@2dsd.ru | webtitov.ru */
'use strict';

document.addEventListener("DOMContentLoaded", () => {
  const WebT = {};

  WebT.settings = {
    modal_active_class: '--modal-show'
  };

  WebT.elements = {
    modal_toggle: document.querySelectorAll('[data-modal-toggle]'),
    modal_box: document.querySelectorAll('[data-modal]'),
    overlay: document.querySelector('.theme-overlay'),
    close_modal: document.querySelectorAll('[data-modal-close]'),
    callback_button: document.querySelector('.form-box__submit'),
    callback_inputs: document.querySelectorAll('.callback-row__input')
  };

  /* Close all modals */
  const closeModals = () => {
    // close all modals
    for (let i=0; i < WebT.elements.modal_box.length; i++) {
      WebT.elements.modal_box[i].classList.remove(WebT.settings.modal_active_class);
    }
    // remove active classes from modal toggle buttons
    for (let i=0; i < WebT.elements.modal_toggle.length; i++) {
      WebT.elements.modal_toggle[i].classList.remove(WebT.settings.modal_active_class);
    }
    // close overlay
    WebT.elements.overlay.classList.remove(WebT.settings.modal_active_class, '--input-is-edit');
  }

  /* Modals function */
  (() => {
    // Add click event to close modals
    for (let i=0; i < WebT.elements.close_modal.length; i++) {
      WebT.elements.close_modal[i].addEventListener('click', () => {
        closeModals();
      });
    }
    // Add click event to open target modal
    for (let i=0; i < WebT.elements.modal_toggle.length; i++) {
      WebT.elements.modal_toggle[i].addEventListener('click', () => {
        let this_toggle = WebT.elements.modal_toggle[i],
            target_modal = this_toggle.getAttribute('data-modal-toggle');
        // if nav modal opened
        if (target_modal === 'nav' && this_toggle.classList.contains(WebT.settings.modal_active_class)) {
          closeModals();
          WebT.elements.modal_toggle[i].classList.remove(WebT.settings.modal_active_class);
        } else {
          closeModals();
          document.querySelector(`[data-modal='${target_modal}']`).classList.add(WebT.settings.modal_active_class);
          WebT.elements.overlay.classList.add(WebT.settings.modal_active_class);
          WebT.elements.modal_toggle[i].classList.add(WebT.settings.modal_active_class);
        }
      });
    }
  })();

  /* Callback modal */
  (() => {
    let form_phone_input = document.getElementById('form_phone'),
      form_name_input = document.getElementById('form_name'),
      callback_name_input = document.getElementById('callback_name'),
      callback_phone_input = document.getElementById('callback_phone');


    // update data when open
    WebT.elements.callback_button.addEventListener('click', () => {
      if (form_phone_input.value === '' || form_name_input.value === '') {
        alert('Поля заполнены некорректно!');
        closeModals();
        return false;
      }
      // set data to inputs
      callback_name_input.value = form_name_input.value;
      callback_phone_input.value = form_phone_input.value;
      // add overlay class
      WebT.elements.overlay.classList.add('--input-is-edit');
    });

    // edit data
    let update_inputs_buttons = document.querySelectorAll('.callback-row__update');
    for (let i=0; i < update_inputs_buttons.length; i++) {
      update_inputs_buttons[i].addEventListener('click', (e) => {
        e.preventDefault();
        let input_parent = e.target.parentNode,
            input_to_edit = input_parent.querySelector('.callback-row__input');

        if (input_parent.classList.contains('--is-edit')) {
          input_parent.classList.remove('--is-edit');
          input_to_edit.setAttribute('readonly','');
          // set data to inputs
          form_name_input.value = callback_name_input.value;
          form_phone_input.value = callback_phone_input.value;
        } else {
          input_to_edit.removeAttribute('readonly');
          input_parent.classList.add('--is-edit');
        }

      });
    }

    // send data after confirm
    WebT.elements.overlay.addEventListener('click', () => {
      // todo: form send
      if (WebT.elements.overlay.classList.contains('--input-is-edit')) {
        WebT.elements.overlay.classList.remove('--input-is-edit');
      }
    });
  })();

  /* Mask plugin */
  jQuery('input[type=tel]').mask('+7 (000) 000-00-00');
});