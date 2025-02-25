<?php

namespace Drupal\dependency_injection_exercise\Services;

/**
 * Service for fetching photos from external API.
 */
class PhotoService {

  /**
   * Fetches photos from the API.
   *
   * @param int|null $album_id
   *   Optional album ID. If not provided, uses a random album.
   *
   * @return array
   *   Array of photo data.
   */
  public function getPhotos(?int $album_id = NULL): array {

    return [];
  }

}
