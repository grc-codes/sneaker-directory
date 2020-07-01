@extends('layouts.app')

@section('title')
    product TITLE
@endsection

@section('content')
    <section id="product-page">
        <div class="product-page-container">
            <form id="product-addtocart-form" action="">
                <div class="product-wrapper">
                    <div class="product-top">
                        <div class="breadcrumbs">
                            <ul>
                                <li>
                                    <a href="">
                                        <span class="name">Home</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <span class="name">Adidas</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <span class="name">Yeezy Boost 350 V2</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="product-brand">
                            Adidas
                        </div>
                        <h1 class="product-name">
                            <span id="product-name">Yeezy Boost 350 V2</span>
                            <br>
                            <span id="product-colorway">"Zyon"</span>
                        </h1>
                    </div>
                    <div class="product-mobile-gallery">
                        <div class="product-mobile-gallery-images">
                            <div class="image-container">
                                <img src="/img/product-img.png" />
                            </div>
                        </div>
                    </div>
                    <div class="product-shop">
                        <div id="product-options-wrapper">
                            <div class="product-sizes">
                                <div class="selected-product-size">
                                    <i class="fas fa-chevron-down"></i>
                                    <span class="product-sizes-detail">
                                        <span class="product-sizes-size">
                                            Size 12.5
                                        </span>
                                        <span class="product-sizes-price">
                                            $410.00
                                        </span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="product-options-bottom">
                            <div class="add-to-cart">
                                <div class="add-to-cart-btn">
                                    <button class="button btn-cart" type="button" title="Add to Cart">
                                        <span>Add to Cart</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-details">
                        <h4>Details</h4>
                        <div class="product-details-description">
                            <p>
                                The adidas Yeezy Boost 350 V2 “Zyon” is a Summer 2020 release that continues the model’s association with wearable, neutral-toned colorways. The Primeknit upper takes on a marbled black, white, and grey look that can sync up with just about any outfit thrown its way. A solid black woven side stripe spans from heel to toe to contrast the appearance. Beige cotton laces and a grey liner provide additional styling. The “Zyon” colorway omits the heel tab found on many previous iterations of the Yeezy 350 V2. Boost cushioning is housed within the semi-translucent midsole to finish off the look. Release date: Summer 2020.
                            </p>
                        </div>
                        <div class="product-details-additional-info">
                            <table id="product-additional-info">
                                <tbody>
                                    <tr class="first odd">
                                        <th class="label">Manufacturer Sku</th>
                                        <td class="data last">FZ1267</td>
                                    </tr>
                                    <tr class="even">
                                        <th class="label">Release Date</th>
                                        <td class="data last">2020</td>
                                    </tr>
                                    <tr class="odd">
                                        <th class="label">Nickname</th>
                                        <td class="data last">Zyon</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <div id="product-modal" class="open">
        <div class="modal-wrapper">
            <div class="modal-wrapper2">
                <div class="modal-header">
                    <div class="close">
                        <i class="fas fa-times"></i>
                    </div>
                </div>
                <div class="modal-content">
                    <div class="modal-content-container">
                        <div id="product-modal-content">
                            <div class="product-sizes-list">
                                <div class="product-sizes-list-options">
                                    <label class="product-sizes-list-option">
                                        <span class="product-sizes-detail">
                                            <span class="product-sizes-size">
                                                5
                                            </span>
                                            <span class="product-sizes-price">
                                                <span class="price">
                                                    $569.00
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                    <label class="product-sizes-list-option">
                                        <span class="product-sizes-detail">
                                            <span class="product-sizes-size">
                                                5.5
                                            </span>
                                            <span class="product-sizes-price">
                                                <span class="price">
                                                    $569.00
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                    <label class="product-sizes-list-option">
                                        <span class="product-sizes-detail">
                                            <span class="product-sizes-size">
                                                6
                                            </span>
                                            <span class="product-sizes-price">
                                                <span class="price">
                                                    $569.00
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                    <label class="product-sizes-list-option">
                                        <span class="product-sizes-detail">
                                            <span class="product-sizes-size">
                                                6.5
                                            </span>
                                            <span class="product-sizes-price">
                                                <span class="price">
                                                    $569.00
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                    <label class="product-sizes-list-option">
                                        <span class="product-sizes-detail">
                                            <span class="product-sizes-size">
                                                7
                                            </span>
                                            <span class="product-sizes-price">
                                                <span class="price">
                                                    $569.00
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                    <label class="product-sizes-list-option">
                                        <span class="product-sizes-detail">
                                            <span class="product-sizes-size">
                                                7.5
                                            </span>
                                            <span class="product-sizes-price">
                                                <span class="price">
                                                    $569.00
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                    <label class="product-sizes-list-option">
                                        <span class="product-sizes-detail">
                                            <span class="product-sizes-size">
                                                8
                                            </span>
                                            <span class="product-sizes-price">
                                                <span class="price">
                                                    $569.00
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                    <label class="product-sizes-list-option">
                                        <span class="product-sizes-detail">
                                            <span class="product-sizes-size">
                                                8.5
                                            </span>
                                            <span class="product-sizes-price">
                                                <span class="price">
                                                    $569.00
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                    <label class="product-sizes-list-option">
                                        <span class="product-sizes-detail">
                                            <span class="product-sizes-size">
                                                9
                                            </span>
                                            <span class="product-sizes-price">
                                                <span class="price">
                                                    $569.00
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                    <label class="product-sizes-list-option">
                                        <span class="product-sizes-detail">
                                            <span class="product-sizes-size">
                                                9.5
                                            </span>
                                            <span class="product-sizes-price">
                                                <span class="price">
                                                    $569.00
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection