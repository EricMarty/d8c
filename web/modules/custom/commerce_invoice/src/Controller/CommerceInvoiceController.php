<?php

namespace Drupal\commerce_invoice\Controller;

/**
 * Controller routines for Commerce Invoice
 */
class CommerceInvoiceController {
  public function selectInvoicePage($commerce_order) {
    $build = [];
    $build['#title'] = 'Invoice ' . $commerce_order;

    $build['#markup'] = '<p>TODO: add invoice page</p>';

    return $build;
  }

}