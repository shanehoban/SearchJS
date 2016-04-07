# SearchJS - Quick JavaScript Filtering
Search and filter your elements with around 750 bytes of JavaScript - without any framework. This is pure JavaScript.

![demo](/resources/demo.gif)

> These are fake names (I hope)

## Easy to Implement

Simply include `searchjs.js` in your page, and set up like below:

      <input type="text" data-search-js-input="static-list" />

      <div data-search-js-container="static-list">
          <div data-search-js-value="Malik Roper">Malik Roper</div>
          <div data-search-js-value="Socorro Cranford">Socorro Cranford</div>
          <div data-search-js-value="Marge Tenney">Marge Tenney</div>
          ...
          <div data-search-js-value="Zandra Adkison">Zandra Adkison</div>
          <div data-search-js-value="Janay Bourland ">Janay Bourland </div>
          <div data-search-js-value="Rae Awad">Rae Awad </div>
      </div>
      
## Walkthrough

Create an `input` with a `data-search-js-input` attribute. The value of this attribute coincides with the container of elements you want to filter.

Then, create a container (`div`, `span`, `...whatever`) with the custom attribute `data-search-js-container`. The value should be the same as the `data-search-js-input` that you want your input to reference.

> You can absolutely reference more lists to one input, no problem. My guess is referencing more than one input to one list would be ugly

Finally, for each element you want to filter, create a custom attribute `data-search-js-value`, typically it would have the same value that the element is going to contain - so it can be searchable. E.g. `<div data-search-js-value="Rae Awad">Rae Awad </div>`

> Yes you can set these attributes to any value you want, e.g. codes that you and your secret party only know how to reference, like this: `<div data-search-js-value="Rae Awad 500-Secret-Code">Rae Awad </div>`
